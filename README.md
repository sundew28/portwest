<h1>Welcome to Portwest initial test</h1>
<p>This is open test, no time limit, please do your best</p>

<p>After checkout if you have any issues with setup or cache errors pls check following steps</p>
<p>create folder structure in storage:</p>
<ul>
    <li>storage/framework/cache/data</li>
    <li>storage/framework/sessions</li>
    <li>storage/framework/views</li>
</ul>
<p>run commands:</p>
<ul>
    <li>php artisan config:clear</li>
    <li>php artisan cache:clear</li>
    <li>php artisan view:clear</li>
</ul>

<p><strong>Create simple application to admin tasks list.</strong></p>

<p>Task is a title, description and can have 2 statuses (NEW, COMPLETED)</p>
<p>Title and description are mandatory fields.</p>

<p>1 create tasks table</p>
<p>2 create controller for tasks</p>
<p>3 add routes in web.php</p>
<p>4 create a page to display list of tasks</p>
<p>5 create a page to create new task</p>
<p>6 create a page to edit task</p>
<p>7 From list page each tasks can be Updated to status DONE or DELETED</p>
<p>6 DONE task can not be DELETED</p>
<p>7 DONE task are styled as line-through</p>
<p>8 add filter to display ALL/NEW/DONE tasks</p>

<p><strong>BONUS</strong></p>
<p>1 On each action display modal confirmation OR if needed confirmation modal</p>
<p>2 Create Seeder</p>

