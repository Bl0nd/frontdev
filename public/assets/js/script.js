"better-comments.tags"; {
    [
        //! 
        {
            "tag": "!",
            "color": "#FF2D00",
            "strikethrough": false,
            "underline": false,
            "backgroundColor": "transparent",
            "bold": false,
            "italic": false
        },
        //? 
        {
            "tag": "?",
            "color": "#3498DB",
            "strikethrough": false,
            "underline": false,
            "backgroundColor": "transparent",
            "bold": false,
            "italic": false
        },

        {
            "tag": "//",
            "color": "#474747",
            "strikethrough": true,
            "underline": false,
            "backgroundColor": "transparent",
            "bold": false,
            "italic": false
        },
        //todo
        {
            "tag": "todo",
            "color": "#FF8C00",
            "strikethrough": false,
            "underline": false,
            "backgroundColor": "transparent",
            "bold": false,
            "italic": false
        },
        //*
        {
            "tag": "*",
            "color": "#98C379",
            "strikethrough": false,
            "underline": false,
            "backgroundColor": "transparent",
            "bold": false,
            "italic": false
        }
    ]
}

document.querySelectorAll('.borda').forEach(function (item) {
    item.addEventListener('mouseover', function () {
        item.style.transform = 'scale(1.1)';  
        item.style.transition = 'transform 0.3s ease';
    });

    item.addEventListener('mouseout', function () {
        item.style.transform = 'scale(1)';  
    });
});

document.querySelectorAll('h3').forEach(function (item) {
    item.addEventListener('mouseover', function () {
        item.style.transform = 'scale(1.05)';
        item.style.transition = 'transform 0.3s ease';
    });

    item.addEventListener('mouseout', function () {
        item.style.transform = 'scale(1)';
    });
});

document.querySelectorAll('h4').forEach(function (item) {
    item.addEventListener('mouseover', function () {
        item.style.transform = 'scale(1.05)';
        item.style.transition = 'transform 0.3s ease';
    });

    item.addEventListener('mouseout', function () {
        item.style.transform = 'scale(1)';
    });
});



$('.galeria').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }

    ]
});


//$('.slide').hiSlide();

//* MENU FIXO
window.onscroll = function () {
    var top = document.documentElement.scrollTop || document.body.scrollTop; // Compatibilidade com navegadores
    var header = document.getElementById("topo-fixo");

    if (top > 500) { // Substitua '900' pela altura desejada
        header.classList.add('menu-fixo');
    } else {
        header.classList.remove('menu-fixo');
    }
};

// Seleciona todos os elementos <details>
const detailsElements = document.querySelectorAll('details');

detailsElements.forEach((details) => {
    details.addEventListener('click', () => {
        // Fecha todos os <details>, exceto o clicado
        detailsElements.forEach((otherDetails) => {
            if (otherDetails !== details) {
                otherDetails.removeAttribute('open');
            }
        });
    });
});

/// Seleciona o toggle switch
const darkModeToggle = document.getElementById("dark-mode-toggle");

// Verifica se o modo escuro está salvo no localStorage
const isDarkMode = localStorage.getItem("dark-mode") === "true";

// Aplica o modo escuro se estiver salvo
if (isDarkMode) {
    document.body.classList.add("dark-mode");
    darkModeToggle.checked = true; // Marca o toggle switch
}

// Adiciona o evento de mudança
darkModeToggle.addEventListener("change", () => {
    const isChecked = darkModeToggle.checked;

    // Salva a preferência no localStorage
    localStorage.setItem("dark-mode", isChecked);

    // Adiciona ou remove o modo escuro
    document.body.classList.toggle("dark-mode", isChecked);
});

// menu hamburguer
const hamburgerBtn = document.getElementById('hamburger-btn');
const menuList = document.getElementById('menu-list');
const hamburgerIcon = document.getElementById('hamburger-icon');

hamburgerBtn.addEventListener('click', () => {
  menuList.classList.toggle('active');

  if (menuList.classList.contains('active')) {
    hamburgerIcon.src = './assets/img/close.png';
  } else {
    hamburgerIcon.src = './assets/img/menu.png';
  }
});
