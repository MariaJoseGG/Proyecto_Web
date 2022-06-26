var equipamiento = [];
var total = [];

// Consumo de la API
fetch("https://www.datos.gov.co/resource/cueb-3udi.json")
  // Then necesita una promesa, y esa promesa se resuelve con una respuesta
  .then((datos_obtenidos) => datos_obtenidos.json())

  //datos_obtenidos es el resultado de la promesa respuesta, la cual fue convertida a json
  .then(function transformar(datos_obtenidos) {
    // Iteramos sobre cada dato
    datos_obtenidos.forEach(function agregar(datos_obtenidos) {
      //Si los datos son diferentes de vacío
      if (
        datos_obtenidos.codmpo != undefined &&
        datos_obtenidos.conexiones != undefined
      ) {
        total.push(datos_obtenidos.codmpo);
        equipamiento.push(datos_obtenidos.conexiones);
      }
    });


    // Variables para las gráficas
    var graf1 = {
      type: "pie",
      values: total,
      labels: equipamiento,
      textinfo: "none",
      automargin: true,
    };

    var datosGraficas = [graf1];

    // Estilos de la gráfica
    var layout = {
      title: "Total de Conexiones de Equipamiento",
      font: {
        family: "Times New Roman",
      },
    };

    Plotly.newPlot("div1", datosGraficas, layout);
  });