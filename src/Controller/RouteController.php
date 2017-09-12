<?php

namespace Geckob\RouteList\Controller;



class RouteController
{
    public function listView() {

        $routes = app('router')->getRoutes();


        $extractedRoutes = [];
        foreach ($routes as $route) {

            $extractedRoutes[] = (object) [
                'method' =>  implode('|', $route->methods()),
                'uri' => $route->uri(),
                'name' => $route->getName(),
                'action' => $route->getActionName(),
                'middleware' =>  implode('|', $route->middleware())
            ];

        }




        return view('RouteList::list.index')
            ->with('routes', $extractedRoutes);

    }



}
