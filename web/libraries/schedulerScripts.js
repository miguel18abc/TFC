// 1. Configurar los ajustes básicos del planificador
scheduler.config.xml_date="%Y-%m-%d %H:%i";
scheduler.config.first_hour = 6;
scheduler.config.last_hour = 24;
scheduler.config.limit_time_select = true;
scheduler.config.details_on_create = true;
// Desactivar la edición de eventos con un solo clic
scheduler.config.select = false;
scheduler.config.details_on_dblclick = true;
scheduler.config.max_month_events = 5;
scheduler.config.resize_month_events = true;

// 2. Configurar secciones de Lightbox (formulario)
scheduler.config.lightbox.sections = [
    // Si tiene otro campo en su entidad de cita (por ejemplo, columna example_field), lo agregaría como
    // {name:"Example Field", height:30, map_to:"example_field", type:"textarea"},
    {name:"Title", height:30, map_to:"text", type:"textarea"},
    {name:"Description", height:30, map_to:"description", type:"textarea"},
    {name:"time", height:72, type:"time", map_to:"auto"}
];

// 3. Iniciar calendario con configuraciones personalizadas
var initSettings = {
    // Elemento donde se iniciará el planificador
    elementId: "scheduler_element",
    // Objeto de fecha donde se debe iniciar el planificador
    startDate: new Date(),
    // Modo de inicio
    mode: "week"
};

scheduler.init(initSettings.elementId, initSettings.startDate , initSettings.mode);

// 4. Analizar las citas iniciales (desde el controlador de índice)
scheduler.parse(window.GLOBAL_APPOINTMENTS, "json");

// 5. Función que formatea los eventos al formato esperado en el lado del servidor

/**
 * Devuelve un Objeto con la estructura deseada del servidor.
 * 
 * @param {*} id 
 * @param {*} useJavascriptDate 
 */
function getFormatedEvent(id, useJavascriptDate){
    var event;

    // If id is already an event object, use it and don't search for it
    if(typeof(id) == "object"){
        event = id;
    }else{
        event = scheduler.getEvent(parseInt(id));
    }

    if(!event){
        console.error("The ID of the event doesn't exist: " + id);
        return false;
    }
     
    var start , end;
    
    if(useJavascriptDate){
        start = event.start_date;
        end = event.end_date;
    }else{
        start = moment(event.start_date).format('DD-MM-YYYY HH:mm:ss');
        end = moment(event.end_date).format('DD-MM-YYYY HH:mm:ss');
    }
    
    return {
        id: event.id,
        start_date : start,
        end_date : end,
        description : event.description,
        title : event.text
    };
}

// 6.  ¡Adjunte controladores de eventos!

/**
 * Manejar el evento del planificador CREATE
 */
scheduler.attachEvent("onEventAdded", function(id,ev){
    var schedulerState = scheduler.getState();
    
    $.ajax({
        url:  window.GLOBAL_SCHEDULER_ROUTES.create,
        data: getFormatedEvent(ev),
        dataType: "json",
        type: "POST",
        success: function(response){
            // Muy importante:
            // Actualice el ID de la cita del programador con el ID de la base de datos
            // ¡para que podamos editar la misma cita ahora!
            
            scheduler.changeEventId(ev.id , response.id);

            alert('The appointment '+ev.text+ " has been succesfully created");
        },
        error:function(error){
            alert('Error: The appointment '+ev.text+' couldnt be created');
            console.log(error);
        }
    }); 
});

/**
 * Manejar el evento UPDATE del programador en todos los casos posibles (arrastrar y soltar, cambiar el tamaño, etc.)
 *  
 */
scheduler.attachEvent("onEventChanged", function(id,ev){
    $.ajax({
        url:  window.GLOBAL_SCHEDULER_ROUTES.update,
        data: getFormatedEvent(ev),
        dataType: "json",
        type: "POST",
        success: function(response){
            if(response.status == "success"){
                alert("Event succesfully updated !");
            }
        },
        error: function(err){
            alert("Error: Cannot save changes");
            console.error(err);
        }
    });

    return true;
});

/**
 * Manejar el evento de cita DELETE
 */
scheduler.attachEvent("onConfirmedBeforeEventDelete",function(id,ev){
    $.ajax({
        url: window.GLOBAL_SCHEDULER_ROUTES.delete,
        data:{
            id: id
        },
        dataType: "json",
        type: "DELETE",
        success: function(response){
            if(response.status == "success"){
                if(!ev.willDeleted){
                    alert("Appointment succesfully deleted");
                }
            }else if(response.status == "error"){
                alert("Error: Cannot delete appointment");
            }
        },
        error:function(error){
            alert("Error: Cannot delete appointment: " + ev.text);
            console.log(error);
        }
    });
    
    return true;
});


/**
 * Edite el evento con el clic derecho también
 * 
 * @param {type} id
 * @param {type} ev
 * @returns {Boolean}
 */
scheduler.attachEvent("onContextMenu", function (id, e){
    scheduler.showLightbox(id);
    e.preventDefault();
});