<!--Test Oracle file for UBC CPSC304 2018 Winter Term 1
  Created by Jiemin Zhang
  Modified by Simona Radu
  Modified by Jessica Wong (2018-06-22)
  This file shows the very basics of how to execute PHP commands
  on Oracle.  
  Specifically, it will drop a table, create a table, insert values
  update values, and then query for values
 
  IF YOU HAVE A TABLE CALLED "demoTable" IT WILL BE DESTROYED

  The script assumes you already have a server set up
  All OCI commands are commands to the Oracle libraries
  To get the file to work, you must place it somewhere where your
  Apache server can run it, and you must rename it to have a ".php"
  extension.  You must also change the username and password on the 
  OCILogon below to be your ORACLE username and password -->

  <html>
    <head>
        <title>CPSC 304 PHP/Oracle Demonstration</title>
    </head>

    <body>

        <h2>Create Customer Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createCustomerTable"
                class="button" value="createCustomerTable" />
        </form>

    <hr />
        <h2>Create Order Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createOrderTable"
                class="button" value="createOrderTable" />
        </form>

    <hr />
        <h2>Create haveDish Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createhaveDishTable"
                class="button" value="createhaveDishTable" /> 
        </form>

    <hr />

        <h2>Create Dish Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createDishTable"
                class="button" value="createDishTable"/> 
        </form>

    <hr />
        <h2>Create Work_At Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createWorkAtTable"
                class="button" value="createWorkAtTable"/> 
        </form>

    <hr />
        <!--amber-->
        <h2>Create Courier Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createCourierTable"
                class="button" value="createCourierTable"/> 
        </form>
       
    <hr />
        <h2>Create Payment Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createPaymentTable"
                class="button" value="createPaymentTable"/> 
        </form>

    <hr />
   

        <h2>Create Rate Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createRateTable"
                class="button" value="createRateTable"/> 
        </form>

    <hr />
        <h2>Create Eat_At Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createEatAtTable"
                class="button" value="createEatTable"/> 
        </form>

    <hr />
        <h2>Create Work_In Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createWorkInTable"
                class="button" value="createWorkInTable"/> 
        </form>
    <hr />



    <!--albert-->
        <h2>Create Shop Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createShopTable"
                class="button" value="createShopTable"/>
        </form>
    <hr />

        <h2>Create Address Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createAddressTable"
              class="button" value="createAddressTable"/>
        </form>
    <hr />


        <h2>Create District Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createDistrictTable"
        class="button" value="createDistrictTable"/>
        </form>
    <hr />

        <h2>Create Time Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createTimeTable"
        class="button" value="createTimeTable"/>
        </form>
    <hr />

        <h2>Create Method Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createMethodTable"
        class="button" value="createMethodTable"/>
        </form>
    <hr />

        <h2>Create Golden Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createGoldenTable"
        class="button" value="createGoldenTable"/>
        </form>
    <hr />

        <h2>Create GDiscount Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createGDiscountTable"
        class="button" value="createGDiscountTable"/>
        </form>
    <hr />


        <h2>Create SDiscount Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createSDiscountTable"
        class="button" value="createSDiscountTable"/>
        </form>
    <hr />

        <!--copy paste-->
        <h2>Reset</h2>
        <p>If you wish to reset the table press on the reset button. If this is the first time you're running this page, you MUST use reset</p>

        <form method="POST" action="createTable.php">
            <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
            <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
            <p><input type="submit" value="Reset" name="reset"></p>
        </form>

        <hr />

        <h2>Insert Values into DemoTable</h2>
        <form method="POST" action="createTable.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Number: <input type="text" name="insNo"> <br /><br />
            Name: <input type="text" name="insName"> <br /><br />

            <input type="submit" value="Insert" name="insertSubmit"></p>
        </form>

        <hr />

        <h2>Update Name in DemoTable</h2>
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.</p>

        <form method="POST" action="createTable.php"> <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            Old Name: <input type="text" name="oldName"> <br /><br />
            New Name: <input type="text" name="newName"> <br /><br />

            <input type="submit" value="Update" name="updateSubmit"></p>
        </form>

        <hr />

        <h2>Count the Tuples in DemoTable</h2>
        <form method="GET" action="createTable.php"> <!--refresh page when submitted-->
            <input type="hidden" id="countTupleRequest" name="countTupleRequest">
            <input type="submit" name="countTuples"></p>
        </form>

        <hr />

        <h2>Display Content in DemoTable</h2>
        <form method="GET" action="createTable.php"> <!--refresh page when submitted-->
            <input type="hidden" id="DisplayContentRequest" name="DisplayContentRequest">
            <input type="submit" name="displayContent"></p>
        </form>

        <h2>Create Sliver Table Test</h2>
        <form method = "POST" action ="createTable.php">
        <input type="submit" name="createSilverTable"
                class="button" value="createSilverTable"/> 
        </form>

        <?php
		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr); 
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection. 
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        /*print result*/
        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from table demoTable:<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]" 
            }

            echo "</table>";
        }

        /*connect to database*/ 
        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example, 
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_wrc1999", "a47717046", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }


        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleUpdateRequest() {
            global $db_conn;

            $old_name = $_POST['oldName'];
            $new_name = $_POST['newName'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE demoTable SET name='" . $new_name . "' WHERE name='" . $old_name . "'");
            OCICommit($db_conn);
        }

        function handleResetRequest() {
            global $db_conn;
            // Drop old table
            executePlainSQL("DROP TABLE demoTable");

            // Create new table
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE demoTable (id int PRIMARY KEY, name char(30))");
            OCICommit($db_conn);
        }


        //create SDiscount table    
        function createSDiscountTable(){
            global $db_conn;
            executePlainSQL("DROP TABLE SDiscout");

        echo "<br> creating new table <br>";
        executePlainSQL("CREATE TABLE SDiscout(
            level     int NOT NULL PRIMARY KEY,
            discount  int
        )");
            OCICommit($db_conn);
        }


        //create silver table
        function createSilverTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE SilverTABLE");

        echo"<br> creating silverbtable <br>";
        executePlainSQL("CREATE TABLE SilverTable(
            CustomerID       int PRIMARY KEY,
		    level            int NOT NULL,
		    coupon           char(10),
            credits          int NOT NULL)");
    
            OCICommit($db_conn);
        }


        function createGDiscountTable(){
            global $db_conn;
            executePlainSQL("DROP TABLE GDiscout");
    
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE GDiscout(
                level     int NOT NULL PRIMARY KEY,
                discount  int
            )");
                OCICommit($db_conn);
            }


        function createGoldenTable(){
            global $db_conn;
            executePlainSQL("DROP TABLE Golden");
                
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE Golden(
                   CustomerID       int PRIMARY KEY,
                   level            int NOT NULL,
                   coupon           char(10),
                   credits          int NOT NULL
               )");
            OCICommit($db_conn);
            }   


        function createMethodTable(){
            global $db_conn;
            executePlainSQL("DROP TABLE Method");

            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE Method(
                 MethodID   int PRIMARY KEY,
                 name           char(30) NOT NULL ,
                CONSTRAINT method_unique UNIQUE (name)
                )");
                OCICommit($db_conn);
            }
        



        // CONSTRAINT fk_Rate
        //      FOREIGN KEY (OrderID)
        //      REFERENCES OrderTable(OrderID)
        //      ON DELETE CASCADE
        /*CREATE TABLE FUNTIONS*/

        //create cumstomer table (customertable)
        function createCustomerTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Customer");

            echo "<br> creating customer table <br>";
            executePlainSQL("CREATE TABLE   Customer (
                            CustomerID int  PRIMARY KEY,
                            name   char(30) NOT NULL,
                            email    char(40),
                            phoneNum    char(10) NOT NULL,
                            password   char(8) NOT NULL)");

            OCICommit($db_conn);
        }
        

        // CONSTRAINT fk_PaymentTable
        // FOREIGN KEY (CustomerID, MethodID)
        // REFERENCES Customer(CustomerID), Method(MethodID)
        //create Payment table
        function createPaymentTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Payment");
        
            echo "<br> creating Payment table <br>";
            executePlainSQL("CREATE TABLE Payment(
                CustomerID    int,
                MethodID      int,
                CONSTRAINT Payment_pk PRIMARY KEY (CustomerID,MethodID))");
              
          OCICommit($db_conn);
      }



        //create Courier table
        function createCourierTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Courier");

            echo "<br> creating courier table <br>";
            executePlainSQL("CREATE TABLE   Courier (
                CourierID       int PRIMARY KEY,
                name            char(30) NOT NULL,
                phoneNum        char(10) NOT NULL,
                password        char(8) NOT NULL)");
                
                OCICommit($db_conn);
            }


        function createTimeATable(){
            global $db_conn;
            executePlainSQL("DROP TABLE TimeA");
            
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE TimeA(
                TimeID		int PRIMARY KEY,
                startTime	TIMESTAMP NOT NULL,
                endTime	TIMESTAMP NOT NULL)");

                OCICommit($db_conn);
            }


        function createDistrictTable(){
            global $db_conn;
            executePlainSQL("DROP TABLE District");
            
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE District(
                postalCode char(6) NOT NULL PRIMARY KEY,
                province     char(40) NOT NULL,
                city 	       char(40) NOT NULL)");
                
                OCICommit($db_conn);
            }


        //create Address table
        function createAddressTable(){
            global $db_conn;
        
            executePlainSQL("DROP TABLE Address");
            echo "<br> creating new table <br>";
        
            createAddressTable();
            executePlainSQL("CREATE TABLE Address(
                AddressID   int  NOT NULL PRIMARY KEY,
                postalCode  char(6)  NOT NULL,
                street            char(100) NOT NULL,
                unit               char(20),
        -- // <!-- FOREIGN KEY(postalCode) REFERENCE District,
        -- // 	ON DELETE SET NULL
        -- // 	ON UPDATE CASCADE) -->
                CONSTRAINT fk_Address
                FOREIGN KEY(postalCode)
                REFERENCES District(postalCode)
                ON DELETE SET NULL
                )");
                OCICommit($db_conn);
                }




        // CONSTRAINT fk_WorkIn
        // FOREIGN KEY (CourierID, TimeID)
        // REFERENCES Courier(CourierID), TimeA(TimeID)

        //create WorkIn table
        function createWorkInTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Work_In");
       
            echo "<br> creating Work_In table <br>";
            executePlainSQL("CREATE TABLE Work_In(
                CourierID	int,
                TimeID	    int,
                CONSTRAINT Work_In_pk PRIMARY KEY (CourierID, TimeID))");
           
            OCICommit($db_conn);
   }



        // CONSTRAINT fk_WorkAt
        // FOREIGN KEY (AddressID, CourierID)
        // REFERENCES Address(AddressID), Courier(CourierID)

        //create WorkAt table
        function createWorkAtTable() {
            global $db_conn;
    
            executePlainSQL("DROP TABLE Work_At");

            echo "<br> creating Work_At table <br>";

            executePlainSQL("CREATE TABLE Work_At(
                AddressID	int,
                CourierID	int,
                CONSTRAINT Work_At_pk PRIMARY KEY (AddressID, CourierID))");
                
            OCICommit($db_conn);
        }




        //create Shop table
        function createShopTable(){
            global $db_conn;
    
            executePlainSQL("DROP TABLE createShop");
            echo "<br> creating new table <br>";
    
            createAddressTable();
            createTimeATable();       //changed
            executePlainSQL("CREATE TABLE Shop (
               ShopID	     int PRIMARY KEY,
               TimeID	     int,
               AddressID     int  NOT NULL,
               name 		 char(30) NOT NULL UNIQUE,
               phoneNum	     char(10) NOT NULL,
               website	     char(50),
               password	     char(8) NOT NULL
    --     <!-- FOREIGN KEY (AddressID) REFERENCE ADDRESS,
    -- 	ON DELETE  CASCADE
    -- 	ON UPDATE CASCADE
    -- FOREIGN KEY (TimeID) REFERENCE Time
    -- ON DELETE SET NULL
    -- 	ON UPDATE CASCADE -->
          CONSTRAINT fk_Shop
          FOREIGN KEY (AddressID)
          REFERENCES  Address(AddressID)
          ON DELETE CASCADE,
          CONSTRAINT fk_TimeA
          FOREIGN KEY (TimeID)
          REFERENCES TimeA(TimeID)
          ON DELETE SET NULL
        )");
        OCICommit($db_conn);
        }
        
        
        //create Dish table
        function createDishTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Dish");
        
            echo "<br> creating Dish table <br>";
            executePlainSQL("CREATE TABLE Dish(
                DishID		int,
                ShopID		int,
                status		char(1) NOT NULL,
                name		char(30) NOT NULL,
                allergy		char(50),
                price		int NOT NULL,
                CONSTRAINT Dish_pk PRIMARY KEY(DishID, ShopID))");
                
                OCICommit($db_conn);
            }
        

        
        // CONSTRAINT fk_EatAt
        // FOREIGN KEY (CustomerID, AddressID)
        // REFERENCES Customer(CustomerID), Address(AddressID)

        //create EatAt table
        function createEatAtTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Eat_At");
       
            echo "<br> creating Eat_At table <br>";
            executePlainSQL("CREATE TABLE Eat_At(
                CustomerID	int,
                AddressID	int,
                CONSTRAINT Eat_At_pk PRIMARY KEY (CustomerID, AddressID))");
           
            OCICommit($db_conn);
   }
                


        // CONSTRAINT fk_OrderTable
        // FOREIGN KEY (TimeID,CourierID,CustomerID,AddressID,MethodID)
        // REFERENCES TimeA(TimeID),Courier(CourierID),Customer(CustomerID),Address(AddressID),Method(MethodID)
        //create order table (created)
        function createOrderTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE OrderTable");

            echo "<br> creating order table <br>";
            executePlainSQL("CREATE TABLE OrderTable(
                OrderID         int PRIMARY KEY,
                TimeID          int  NOT NULL,
                CourierID       int  NOT NULL,
                CustomerID      int  NOT NULL,
                status          int NOT NULL,
                AddressID	    int NOT NULL,
                MethodID	    int NOT NULL,
                price           int NOT NULL)");

            OCICommit($db_conn);
        }



        //create haveDish table
        function createhaveDishTable() {
            global $db_conn;
            //executePlainSQL("DROP TABLE Customer");

            executePlainSQL("DROP TABLE haveDish");
            echo "<br> creating haveDish table <br>";
            executePlainSQL("CREATE TABLE haveDish(
                OrderID	    int,
                ShopID		int,
                DishID		int,
                Comments 	char(1000),
                CONSTRAINT haveDish_pk PRIMARY KEY (OrderID,ShopID,DishID))");
                
            OCICommit($db_conn);
        }


        //create Rate table
        function createRateTable() {
            global $db_conn;
            executePlainSQL("DROP TABLE Rate");
            echo "<br> creating Rate table <br>";

           executePlainSQL("CREATE TABLE Rate(
             RateID          int PRIMARY KEY,
             OrderID         int NOT NULL,
             content         char(1000) NOT NULL,
             ranking         int NOT NULL)");
    
         OCICommit($db_conn);
     }
       

        //create Dish table
        // function createDishTable() {
        //     global $db_conn;
    
        //     executePlainSQL("DROP TABLE Dish");

        //     echo "<br> creating Dish table <br>";

        //     executePlainSQL("CREATE TABLE Dish(
        //         DishID		int,
        //         ShopID		int,
        //         status		char(1) NOT NULL,
        //         name		char(30) NOT NULL,
        //         allergy		char(50),
        //         price		int NOT NULL,
        //         CONSTRAINT Dish_pk PRIMARY KEY(DishID, ShopID))");
                
        //     OCICommit($db_conn);
        // }

        

        // CONSTRAINT fk_WorkAt
        // FOREIGN KEY (AddressID, CourierID)
        // REFERENCES Address(AddressID), Courier(CourierID)

        //create WorkAt table
        // function createWorkAtTable() {
        //     global $db_conn;
    
        //     executePlainSQL("DROP TABLE Work_At");

        //     echo "<br> creating Work_At table <br>";

        //     executePlainSQL("CREATE TABLE Work_At(
        //         AddressID	int,
        //         CourierID	int,
        //         CONSTRAINT Work_At_pk PRIMARY KEY (AddressID, CourierID))");
                
        //     OCICommit($db_conn);
        // }

      


        //create Courier table
	//       function createCourierTable() {
    //         global $db_conn;
    //         executePlainSQL("DROP TABLE Courier");

    //         echo "<br> creating courier table <br>";
    //         executePlainSQL("CREATE TABLE   Courier (
    //                         CourierID       int PRIMARY KEY,
    //                         name            char(30) NOT NULL,
    //                         phoneNum        char(10) NOT NULL,
    //                         password        char(8) NOT NULL)");

    //        OCICommit($db_conn);
    //    }



    


        // CONSTRAINT fk_PaymentTable
        // FOREIGN KEY (CustomerID, MethodID)
        // REFERENCES Customer(CustomerID), Method(MethodID)
        //create Payment table
    //    function createPaymentTable() {
    //          global $db_conn;
    //          executePlainSQL("DROP TABLE Payment");
         
    //          echo "<br> creating Payment table <br>";
    //          executePlainSQL("CREATE TABLE Payment(
    //              CustomerID    int,
    //              MethodID      int,
    //              CONSTRAINT Payment_pk PRIMARY KEY (CustomerID,MethodID))");
               
    //        OCICommit($db_conn);
    //    }



       //create Rate table
    //    function createRateTable() {
    //         global $db_conn;
    //         executePlainSQL("DROP TABLE Rate");
    //         echo "<br> creating Rate table <br>";

    //        executePlainSQL("CREATE TABLE Rate(
    //          RateID          int PRIMARY KEY,
    //          OrderID         int NOT NULL,
    //          content         char(1000) NOT NULL,
    //          ranking         int NOT NULL)");
    
    //      OCICommit($db_conn);
    //  }
       

        // CONSTRAINT fk_EatAt
        // FOREIGN KEY (CustomerID, AddressID)
        // REFERENCES Customer(CustomerID), Address(AddressID)

        //create EatAt table
//         function createEatAtTable() {
//             global $db_conn;
//             executePlainSQL("DROP TABLE Eat_At");
       
//             echo "<br> creating Eat_At table <br>";
//             executePlainSQL("CREATE TABLE Eat_At(
//                 CustomerID	int,
//                 AddressID	int,
//                 CONSTRAINT Eat_At_pk PRIMARY KEY (CustomerID, AddressID))");
           
//             OCICommit($db_conn);
//    }

        // CONSTRAINT fk_WorkIn
        // FOREIGN KEY (CourierID, TimeID)
        // REFERENCES Courier(CourierID), TimeA(TimeID)

        //create WorkIn table
//         function createWorkInTable() {
//             global $db_conn;
//             executePlainSQL("DROP TABLE Work_In");
       
//             echo "<br> creating Work_In table <br>";
//             executePlainSQL("CREATE TABLE Work_In(
//                 CourierID	int,
//                 TimeID	    int,
//                 CONSTRAINT Work_In_pk PRIMARY KEY (CourierID, TimeID))");
           
//             OCICommit($db_conn);
//    }


 
//    function createShopTable(){
//         global $db_conn;

//         executePlainSQL("DROP TABLE createShop");
//         echo "<br> creating new table <br>";

//         createAddressTable();
//         createTimeTable();
//         executePlainSQL("CREATE TABLE Shop (
//            ShopID	     int PRIMARY KEY,
//            TimeID	     int,
//            AddressID     int  NOT NULL,
//            name 		 char(30) NOT NULL UNIQUE,
//            phoneNum	     char(10) NOT NULL,
//            website	     char(50),
//            password	     char(8) NOT NULL
// --     <!-- FOREIGN KEY (AddressID) REFERENCE ADDRESS,
// -- 	ON DELETE  CASCADE
// -- 	ON UPDATE CASCADE
// -- FOREIGN KEY (TimeID) REFERENCE Time
// -- ON DELETE SET NULL
// -- 	ON UPDATE CASCADE -->
//       CONSTRAINT fk_Shop
//       FOREIGN KEY (AddressID)
//       REFERENCES  Address(AddressID)
//       ON DELETE CASCADE,
//       CONSTRAINT fk_TimeA
//       FOREIGN KEY (TimeID)
//       REFERENCES TimeA(TimeID)
//       ON DELETE SET NULL
//     )");
//     OCICommit($db_conn);
//     }


//     function createAddressTable(){
//         global $db_conn;

//         executePlainSQL("DROP TABLE Address");
//         echo "<br> creating new table <br>";

//         createAddressTable();
//         executePlainSQL("CREATE TABLE Address(
//             AddressID   int  NOT NULL PRIMARY KEY,
//             postalCode  char(6)  NOT NULL,
//             street            char(100) NOT NULL,
//             unit               char(20),
// -- // <!-- FOREIGN KEY(postalCode) REFERENCE District,
// -- // 	ON DELETE SET NULL
// -- // 	ON UPDATE CASCADE) -->
//         CONSTRAINT fk_Address
//         FOREIGN KEY(postalCode)
//         REFERENCES District(postalCode)
//         ON DELETE SET NULL
//         )");
//         OCICommit($db_conn);
//         }


    // function createDistrictTable(){
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE District");
    //     echo "<br> creating new table <br>";
    //     executePlainSQL("CREATE TABLE District(
    //       postalCode char(6) NOT NULL PRIMARY KEY,
    //       province     char(40) NOT NULL,
    //       city 	       char(40) NOT NULL)");
    //     OCICommit($db_conn);
    // }


    // function createTimeTable(){
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE TimeA");
    //     echo "<br> creating new table <br>";
    //     executePlainSQL("CREATE TABLE TimeA(
    //      TimeID		int PRIMARY KEY,
    //      startTime	TIMESTAMP NOT NULL,
    //       endTime	TIMESTAMP NOT NULL
    //     )");
    //     OCICommit($db_conn);
    //     }

    // function createMethodTable(){
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE Method");
    //     echo "<br> creating new table <br>";
    //     executePlainSQL("CREATE TABLE Method(
    //      MethodID   int PRIMARY KEY,
    //      name           char(30) NOT NULL ,
    //       CONSTRAINT method_unique UNIQUE (name)
    //     )");
    //     OCICommit($db_conn);
    // }

    // function createGoldenTable(){
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE Golden");
    //     echo "<br> creating new table <br>";
    //     executePlainSQL("CREATE TABLE Golden(
    //        CustomerID       int PRIMARY KEY,
    //        level            int NOT NULL,
    //        coupon           char(10),
    //        credits          int NOT NULL
    //    )");
    // OCICommit($db_conn);
    // }

        
    // function createGDiscountTable(){
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE GDiscout");

    //     echo "<br> creating new table <br>";
    //     executePlainSQL("CREATE TABLE GDiscout(
    //         level     int NOT NULL PRIMARY KEY,
    //         discount  int
    //     )");
    //         OCICommit($db_conn);
    //     }


    //create SDiscount table    
    // function createSDiscountTable(){
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE SDiscout");

    //     echo "<br> creating new table <br>";
    //     executePlainSQL("CREATE TABLE SDiscout(
    //         level     int NOT NULL PRIMARY KEY,
    //         discount  int
    //     )");
    //         OCICommit($db_conn);
    //     }


    //create silver table
    // function createSilverTable() {
    //     global $db_conn;
    //     executePlainSQL("DROP TABLE SilverTABLE");

    //     echo"<br> creating silverbtable <br>";
    //     executePlainSQL("CREATE TABLE SilverTable(
    //         CustomerID       int PRIMARY KEY,
	// 	    level            int NOT NULL,
	// 	    coupon           char(10),
    //         credits          int NOT NULL)");
    
    //         OCICommit($db_conn);
    //     }


       
        
        function handleInsertRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['insNo'],
                ":bind2" => $_POST['insName']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into demoTable values (:bind1, :bind2)", $alltuples);
            OCICommit($db_conn);
        }

        function handleCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM demoTable");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in demoTable: " . $row[0] . "<br>";
            }
        }

        /*DISPLAY CONTENT*/
        function handleDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT ID, NAME FROM demoTable");

            if (($row = oci_fetch_row($result)) != false) {
                printResult($result);
            }

        }


        // HANDLE ALL POST ROUTES
	    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                 } else if (array_key_exists('createCustomerTable', $_POST)) {
                    createCustomerTable();
                } else if(array_key_exists('createOrderTable', $_POST)) {
                    createOrderTable();
                }else if(array_key_exists('createhaveDishTable', $_POST)) {
                    createhaveDishTable();
                }else if(array_key_exists('createDishTable', $_POST)) {
                    createDishTable();
                }else if (array_key_exists('createWorkAtTable', $_POST)) {
                    createWorkAtTable();
                }else if (array_key_exists('createCourierTable', $_POST)) {
                    createCourierTable();
                }else if (array_key_exists('createPaymentTable',$_POST)) {
                    createPaymentTable();
                }else if (array_key_exists('createRateTable', $_POST)) {
                    createRateTable();
                }else if (array_key_exists('createEatAtTable', $_POST)) {
                    createEatAtTable();
                }else if (array_key_exists('createWorkInTable', $_POST)) {
                    createWorkInTable();  
                }else if (array_key_exists('createShopTable', $_POST)) {
                    createShopTable();
                }else if (array_key_exists('createAddressTable', $_POST)) {
                    createAddressTable();
                }else if (array_key_exists('createDistrictTable', $_POST)) {
                    createDistrictTable();
                }else if (array_key_exists('createTimeTable', $_POST)) {
                    createTimeTable();
                }else if (array_key_exists('createMethodTable', $_POST)) {
                    createMethodTable();
                }else if (array_key_exists('createGoldenTable', $_POST)) {
                    createGoldenTable();
                }else if (array_key_exists('createGDiscountTable', $_POST)) {
                    createGDiscountTable();
                }else if (array_key_exists('createSDiscountTable', $_POST)) {
                    createSDiscountTable();
                }else if (array_key_exists('createSilverTable', $_POST)) {
                    createSilverTable();
                }

                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
	    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                }else if(array_key_exists('displayContent',$_GET)) {
                    handleDisplayRequest();
                }

                disconnectFromDB();
            }
        }

        if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['createCustomerTable'])
            ||isset($_POST['createOrderTable']) || isset($_POST['createhaveDishTable']) || isset($_POST['createDishTable'])
            || isset($_POST['createWorkAtTable'])|| isset($_POST['createCourierTable']) || isset($_POST['createPaymentTable'])
            || isset($_POST['createRateTable']) || isset($_POST['createEatAtTable']) || isset($_POST['createWorkInTable'])
            || isset($_POST['createShopTable']) || isset($_POST['createAddressTable']) || isset($_POST['createDistrictTable'])
            || isset($_POST['createTimeTable']) || isset($_POST['createMethodTable']) || isset($_POST['createGoldenTable'])
            || isset($_POST['createGDiscountTable']) || isset($_POST['createSDiscountTable'])|| isset($_POST['createSilverTable']) ) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        }else if(isset($_GET['displayContent'])) {
            handleGETRequest();
        }

		?>
	</body>
</html>
