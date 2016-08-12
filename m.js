jQuery(document).ready(function($){
    var m,n,f,pi;
    m=$("body>main");
    n=$("body>nav");
    f=$("body>footer");
    j=$("p#joke");
    x=$("a#load");
    pi=parseInt;
    function _(){m.css("min-height",(pi(window.innerHeight)-(eh(n)+eh(f)+ex(m)))+"px");}
    function eh(el){return(pi(el.height())+ex(el))}
    function ex(el){return(pi(el.css("margin-top"))+pi(el.css("margin-bottom")))}
    $(window).bind("resize",_);
    function load(){
        sj("<em>LOADING...</em>");
        $.get('api.php').done(function(e){
            if(typeof(e.joke)!='undefined'){
                sj(e.joke);
            }
        });
    }
    x.bind("click",function(e){e.preventDefault();e.stopPropagation();load()});
    function sj(t){
        j.html(t);
    }
    _();
    load();
});