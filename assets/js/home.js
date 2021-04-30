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
    success: function (res) {
      console.log(res);
      for (const key in res) {
        getUser(`${res[key].user}`);
        console.log(`${res[key].name}`);
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
      printData(res);
    },
    error: function (error) {
      console.error(error);
    }
  })
})()

function printData(user) {
  document.getElementById("user-name").innerHTML = `
    <a class="getstarted scrollto">${user.name}</a>
    `;
}

function logout() {
  document.getElementById("header").classList.add("aos-animate");
  document.cookie = `key=''; expires=''; path=/`;
  document.cookie = `email=''; expires=''; path=/`;
  document.cookie = `token=''; expires=''; path=/`;
  window.location = './'

}

function getUser(userId) {
  $.ajax({
    url: 'https://backendteckapp.herokuapp.com/ajax/ajax-users.php?id=' + userId,
    method: 'GET',
    dataType: 'json',
    success: function (res) {
      console.log(res);
    },
    error: function (error) {
      console.error(error);
    }
  });
}