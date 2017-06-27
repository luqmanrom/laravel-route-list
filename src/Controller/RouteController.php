<?php

namespace RouteList\Controller;



class RouteController
{
    public function listView() {

        $routes = app('router')->getRoutes();


        return view('RouteList::list.index')
            ->with('routes', $routes);

    }



}
