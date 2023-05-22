$("#comarca_id").change(demanaPoblacio);
if (document.getElementById("comarca").getAttribute("value") != null) {
  filterDemanaPoblacio();
}
$("#comarca").change(filterDemanaPoblacio);

function demanaPoblacio() {
  fetch(`../api/poblacio/` + $("#comarca_id").val()).then(function (response) {
    if (response.ok) {
      response.json().then(mostraPoblacio);
    } else {
      console.log(`Status: ${response.status} ${response.statusText}`);
    }
  })
    .catch(function (error) {
      console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
  return false;
}

function mostraPoblacio(dades) {
  $("#poblacio_id").html(function() {
    if (locale == "en") {
      $("#poblacio_id").html("<option value='default'>Loading...</option>");
    } else if (locale == "ca") {
      $("#poblacio_id").html("<option value='default'>Carregant...</option>");
    } else if (locale == "es") {
      $("#poblacio_id").html("<option value='default'>Cargando...</option>");
    }
    setTimeout(function () {
      if (locale == "en") {
        $("#poblacio_id").html("<option value='default'>Select a population...</option>");
      } else if (locale == "ca") {
        $("#poblacio_id").html("<option value='default'>Selecciona una poblacio...</option>");
      } else if (locale == "es") {
        $("#poblacio_id").html("<option value='default'>Selecciona una poblacion...</option>");
      }
      for (const element in dades) {
        if (element == document.getElementById("poblacio_id").getAttribute("value")) {
          $("#poblacio_id").append("<option value='" + element + "' selected>" + dades[element] + "</option>");
        } else {
          $("#poblacio_id").append("<option value='" + element + "'>" + dades[element] + "</option>");
        }
      };
    }, 1000)
  });
}

function filterDemanaPoblacio() {
  fetch(`../api/poblacio/` + $("#comarca").val()).then(function (response) {
    if (response.ok) {
      response.json().then(filterMostraPoblacio);
    } else {
      console.log(`Status: ${response.status} ${response.statusText}`);
    }
  })
    .catch(function (error) {
      console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
  return false;
}

function filterMostraPoblacio(dades) {
  $("#poblacio").html(function() {
    if (locale == "en") {
      $("#poblacio").html("<option value='default'>Loading...</option>");
    } else if (locale == "ca") {
      $("#poblacio").html("<option value='default'>Carregant...</option>");
    } else if (locale == "es") {
      $("#poblacio").html("<option value='default'>Cargando...</option>");
    }
    setTimeout(function () {
      if (locale == "en") {
        $("#poblacio").html("<option value='default'>Select a population...</option>");
      } else if (locale == "ca") {
        $("#poblacio").html("<option value='default'>Selecciona una poblacio...</option>");
      } else if (locale == "es") {
        $("#poblacio").html("<option value='default'>Selecciona una poblacion...</option>");
      }
      for (const element in dades) {
        if (element == document.getElementById("poblacio").getAttribute("value")) {
          $("#poblacio").append("<option value='" + element + "' selected>" + dades[element] + "</option>");
        } else {
          $("#poblacio").append("<option value='" + element + "'>" + dades[element] + "</option>");
        }
      };
    }, 1000)
  });
}