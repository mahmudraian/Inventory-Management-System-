

This is  Inventory Management System (IMS). I made this application with laravel framework. This application has two module. One is User and another is Product. This is mainly crud operation of product and user. Simple dashboard show total user and product ,top stoked Quantity and latest User. 

Firstly, For admin credentials you have to seed admin seeder using " php artisan db:seed --class=AdminSeeder" Commend. If ,it succeed then you can login the system . 

In first page, you saw dashboard. In headers right side you see a icon of side bar , if you click then open a side bar and you see user,home and Product. 

when you go to user or products module then you saw the list of data of this module. If you open if first time you see the empty table and then you add data from breadcrumbs right side add button. 

For permission , I use spite permission package and use custom login.