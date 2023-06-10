<?php
    include_once("config.php");

    //fetching data 
    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage</title>
</head>
<body class="bg-emerald-100">
        <div class="container mx-auto px-[100px] mt-[50px]">
            <div class="flex">
                <a class="border px-[10px] py-[10px] rounded-lg border-black font-semibold bg-teal-300"  href="add.php">Add New User</a><br/><br/>
            </div>
        
            <div class="mt-[20px]">
                <table class="border-collapse border border-slate-400 w-full">
                    <tr class="border-2 border-black">
                        <th class="border-2 border-black text-lg">Name</th>
                        <th class="border-2 border-black text-lg">Age</th>
                        <th class="border-2 border-black text-lg">Email</th>
                        <th class="border-2 border-black text-lg">Update</th>
                    </tr>
                    <?php
                        while($user_data = mysqli_fetch_array($result)) {
                            echo "<tr class='border border-black text-base'>";
                            echo "<td class='border border-black '>".$user_data['name']."</td>";
                            echo "<td class='border border-black '>".$user_data['email']."</td>";
                            echo "<td class='border border-black '>".$user_data['mobile']."</td>";
                            echo "<td class='border border-black '>
                            <div class='flex'>
                            <div class='flex'>
                                <a class='border px-[20px] mr-[10px] py-[10px] rounded-lg border-black font-semibold bg-teal-300' href='edit.php?id=$user_data[id]'>Edit</a>
                            </div>
                            
                            | 
                            <div class='flex'>
                                <a class='border px-[10px] py-[10px] ml-[20px] rounded-lg border-black font-semibold bg-teal-300' href='delete.php?id=$user_data[id]'>Delete</a></td>
                            </div>
                            </div>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>
</body>
</html>