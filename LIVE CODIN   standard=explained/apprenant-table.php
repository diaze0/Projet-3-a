 The code starts by creating a class that extends Migration.

 This is the class that will be used to run the migrations.

 The up() function runs all of the migrations, and down() reverses them.

 The code is an example of a Migration class.

 The code above extends the Migration class with two methods, up() and down().

 The up() method will be called when the migration has been successfully run.

 In this case, it creates a new table named apprenant.

 The down() method will be called when the migration has failed to run.

 In this case, it deletes the table created in the up() method.

