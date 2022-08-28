$(document).ready(function (){
    //Click on navbar
    $('#home').click(function (){
        $.ajax({
            method:'GET',
            url: loadRouter('/home'),
            success: function (view){
                $('#root').html(view);        
            }
        })
    });

    $('#books').click(function (){
        $.ajax({
            method:'GET',
            url: loadRouter('/list'),
            success: function (view){
                $('#root').html(view);        
            }
        })
    });

    $('#new').click(function (){
        $.ajax({
            method:'GET',
            url: loadRouter('/new'),
            success: function (view){
                $('#root').html(view);        
            }
        })
    });
});

function loadRouter(route_php)
{
    const server_url = location.origin,
        route = location.pathname;

    const modify_url = route
        .split('/')
        .slice(0, -1)
        .join('/');

    return server_url + modify_url + route_php;
}