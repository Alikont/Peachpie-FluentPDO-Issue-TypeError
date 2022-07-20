// See https://aka.ms/new-console-template for more information


using Pchp.Core;

const string host = "(localdb)\\MSSQLLocalDB";
const string dbName = "fluentpdo";

var phpContext = Context.CreateEmpty();

var user = DBHelper.getUser(phpContext, host, dbName, "login1");

Console.WriteLine(user);