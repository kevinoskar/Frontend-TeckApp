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
      <a class="getstarted scrollto">${res.name}</a>
      `;
    },
    error: function (error) {
      console.error(error);
    }
  })
})();

function logout() {
  document.getElementById("header").classList.add("aos-animate");
  document.cookie = `key=''; expires=''; path=/`;
  document.cookie = `email=''; expires=''; path=/`;
  document.cookie = `token=''; expires=''; path=/`;
  window.location = './'

}

function createJob() {
  let parametros = $('#job-form').serialize();
  console.log(parametros);
  let urlParams = new URLSearchParams(window.location.search);
  let userId = urlParams.get('key');
  $.ajax({
    url: 'https://backendteckapp.herokuapp.com/ajax/ajax-jobs.php?id=' + userId,
    method: 'POST',
    data: parametros,
    dataType: 'json',
    success: function (res) {
      console.log(res);
    },
    error: function (error) {
      console.error(error);
    }
  });
}

function printJob(job, user) {
  let index = 0;
  for (const key in job) {
    document.getElementById("job-view").innerHTML +=
      `
        <div class="col-sm">
          <div class="card" style="width: 19rem; height: 23rem;">
            <img src="${job[key].urlImage}" class="card-img-top" style="padding: 10px; width: 300px; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">${job[key].name}</h5>
              <p class="card-text">${job[key].description}</p>
              <h6 class="card-subtitle mb-2 text-muted">Usuario: ${user[index].name}</h6>
            </div>
          </div>
        </div>
      `;
    index++;
  }
  window.reload();
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