jQuery(document).ready(function($){
    function _() {
        var height = parseInt(window.innerHeight);
        height -= eh($("body>nav"));
        height -= eh($("body>footer"));
        height -= ex($("body>main"));
        $("body>main").css("min-height", height+"px");
    }
    function eh(el){
        return(
            parseInt(el.height()) + ex(el)
        )
    }
    function ex(el){
        return(
            parseInt(el.css("margin-top"))
            +
            parseInt(el.css("margin-bottom"))
        )
    }

    $(window).bind("resize",_);

    function load(){
        sj("<em>LOADING...</em>");
        $.get('api.php').done(function(e){
            if(typeof(e.joke)!='undefined'){
                sj(e.joke);
            }
        });
    }

    $("a#load").bind("click",function(e){
        e.preventDefault();
        e.stopPropagation();
        load()
    });

    function sj(t){
        $("p#joke").html(t);
    }
    _();
    load();
});