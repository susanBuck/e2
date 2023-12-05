<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
    '/about' => ['AppController', 'about'],
    '/products' => ['ProductsController', 'index'],
    '/product' => ['ProductsController', 'show'],
    '/products/save-review' => ['ProductsController', 'saveReview'],
    '/products/new' => ['ProductsController', 'new'],
    '/products/save' => ['ProductsController', 'save'],
    '/practice' => ['AppController', 'practice']
];