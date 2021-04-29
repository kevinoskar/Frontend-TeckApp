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
    

    let urlParams = new URLSearchParams(window.location.search);
    let userId = urlParams.get('key');
    console.log(userId);
    $.ajax({
        url: './../Backend-TeckApp/ajax/ajax-users.php?id=' + userId,
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
    $.ajax({
        url: 'https://backendteckapp.herokuapp.com/ajax/ajax-users.php?logout',
        method: 'GET',
        dataType: 'json',
        success: function (res) {
            console.log(res);
            window.location = './index.php'
        },
        error: function (error) {
            console.error(error);
        }
    })
}