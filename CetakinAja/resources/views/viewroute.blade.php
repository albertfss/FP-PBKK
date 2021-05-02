$routeCollection = Route::getRoutes();

foreach ($routeCollection as $value) {
    echo $value->getPath();
}