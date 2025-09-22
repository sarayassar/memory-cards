<!-- display data from data base -->
$sql = "SELECT * FROM members";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
            {
                echo $row["name"] ."";
            }
    }



    update data of database

    $sql = "UPDATE members SET name = 'alaa' WHERE name = 'sara'";
    mysqli_query($conn, $sql);



    delete data from database

    $sql = "DELETE FROM members WHERE name = 'sara'";
        mysqli_query($conn, $sql);



        insert data into database

        $sql = "INSERT INTO members (name, email, passwoed) VALUES ('sasa', 's@gmailcom' , 12'34')";
        if(mysqli_query($conn, $sql))
            {
                echo "new mwmbwe created";
            }