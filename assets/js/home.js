(function () {

  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  window.addEventListener('load', () => {
    $.ajax({
      url: 'https://backendteckapp.herokuapp.com/ajax/ajax-jobs.php',
      method: 'GET',
      dataType: 'json',
      success: function (job) {
        if (job != null) {
          let userArray = [];
          for (const key in job) {
            userArray.push(getUser(`${job[key].user}`));
            console.log(job);
          }
          printJob(job, userArray);
        }
      },
      error: function (error) {
        console.error(error);
      }
    })

    let urlParams = new URLSearchParams(window.location.search);
    let userId = urlParams.get('key');
    console.log(userId);
    $.ajax({
      url: 'https://backendteckapp.herokuapp.com/ajax/ajax-users.php?id=' + userId,
      method: 'GET',
      dataType: 'json',
      success: function (res) {
        console.log(res);
        document.getElementById("user-name").innerHTML = `
      <a class="getstarted scrollto"><img src="${res.urlImageProfile}" class="card-img-top" style="display: flex; height: 35px; border-radius: 100px; width: 35px; margin-right:5px;">${res.name}</a>
      `;
      },
      error: function (error) {
        console.error(error);
      }
    });
  });
})();

function logout() {
  document.getElementById("header").classList.add("aos-animate");
  document.cookie = `key=''; max-age=0; path=/`;
  document.cookie = `email=''; max-age=0; path=/`;
  document.cookie = `token=''; max-age=0; path=/`;
  window.location = './'

}

function createJob() {
  let parametros = $('#job-form').serialize();
  console.log(parametros);
  let urlParams = new URLSearchParams(window.location.search);
  let userId = urlParams.get('key');
  if ($('#name-job').val() != '' && $('#urlImage').val() != '') {
    console.log("PAso");
    $.ajax({
      url: 'https://backendteckapp.herokuapp.com/ajax/ajax-jobs.php?id=' + userId,
      method: 'POST',
      data: parametros,
      dataType: 'json',
      success: function (res) {
        console.log(res);
        location.reload();
      },
      error: function (error) {
        console.error(error);
      }
    });
  } else {
    $("#btn-create").empty();
    $("#btn-create").append('<span style="color: red;">Rellenar todos los campos</span>');
  }
}

function printJob(job, user) {
  let index = 0;
  for (const key in job) {
    document.getElementById("job-view").innerHTML +=
      `
        <div class="col-sm">
          <div class="card" style="width: 19rem; height: auto; margin-bottom:30px;">
            <img src="${job[key].urlImage}" class="card-img-top" style="padding: 10px; width: 300px; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">${job[key].name}</h5>
              <p class="card-text">${job[key].description}</p>
              <h6 class="card-subtitle mb-2 text-muted"><img src="${user[index].urlImageProfile}" style="height: 45px; border-radius: 100px; width: 45px; margin-right: 12px;"/>${user[index].name}</h6>
            </div>
          </div>
        </div>
      `;
    index++;
  }
}

function getUser(userId) {
  var users;
  $.ajax({
    url: 'https://backendteckapp.herokuapp.com/ajax/ajax-users.php?id=' + userId,
    method: 'GET',
    dataType: 'json',
    async: false,
    success: function (res) {
      console.log(res);
      users = res;

    },
    error: function (error) {
      console.error(error);
    }
  });
  return users;
}