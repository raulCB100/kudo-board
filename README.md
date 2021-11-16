# kudo_board
Job application for Tekton

Steps to run application:


     docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/var/www/html \
        -w /var/www/html \
        laravelsail/php80-composer:latest \
        composer install --ignore-platform-reqs
   
    alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
   
    sail up
    
    sail npm install
    
    sail composer install
    
    sail php artisan migrate
    
    sail php artisan db:seed
    
    then,open localhost
    
