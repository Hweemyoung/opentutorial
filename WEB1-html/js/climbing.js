var Body = {
    setColor: function (color) {
        document.querySelector('body').style.color = color;
    },
    setBGColor: function (color) {
        document.querySelector('body').style.backgroundColor = color;
    }
}

var Links = {
    setColor: function (color) {
        var linkslist = document.querySelectorAll('a');
        for (i=0; i<linkslist.length; i++) {
            linkslist[i].style.color = color;
        }
    }
}

var ul_li = {
    setColor: function (color) {
        // var linkslist = document.querySelectorAll('ul li');
        // for (i=0; i<linkslist.length; i++) {
        //     linkslist[i].style.color = color;
        $('ul li').css('color', color);
    }
}