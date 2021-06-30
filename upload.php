  
<html>
<head>
    <title>Document</title>
    <style>
        marquee {
            margin-top: 1em;
            font-size: larger;
            margin-left: 10%;
            margin-right: 10%;
            color: red;
        }

        b {
            background-color: yellow;
        }

        table {
            margin-top: 1em;
            border: 1px solid black;
            border-collapse: collapse;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2em;
           background-color: lightgray;
        }

        tr,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        input {
            border: 1 px solid gray;
        }
    </style>
</head>

<body>
<h2>Car Booking<h2>
    <form>
        <table>
            <tr>
                <th colspan="3">Booking Form </th>
            </tr>
            <tr>
                <td>Name</td>
                <td colspan="2"><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td colspan="2"><input type="text"name="age"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td colspan="2"><input type="radio" value="male">Male
                <input type="radio" value="Female">Female</td>
            </tr>
            <tr>
                <td>Address</td>
                <td colspan="2"><input type="text" name="address" ></td>
            </tr>
            <tr>
                <td>EmailId</td>
                <td colspan="2"><input type="email"name="email"> </td>
            </tr>
            <tr>
                <td >Phonenumber </td>
                <td colspan="2"><input type="text"name="phonenumber"> </td>
            </tr>
            <tr>
                <td >Pincode </td>
                <td colspan="2"><input type="text" name="pincode"> </td>
            </tr>
            <tr>
                <td >District </td>
                <td colspan="2"><input type="text"name="district"> </td>
            </tr>
            <tr>
                <td >State</td>
                <td colspan="2"><input type="text"name="state"> </td>
            </tr>
            <tr>
                <td >CarCompany</td>
                <td colspan="2"><input type="text"name="carcompany"> </td>
            </tr>
            <tr>
                <td >CarModel</td>
                <td colspan="2"><input type="text"name="carmodel"> </td>
            </tr>

            <tr>
                <td>upload Id Proof</td>
                <td colspan="2"><input type="file"name="file"></td>
            </tr>
            <tr>
                <td style="text-align: center;"><input type="reset" style="background-color: red;color:white; padding: 6px 12px;"></td>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Submit" style="background-color: green;color:white; padding: 6px 12px; border: 1px solid transparent;"></td>
            </tr>
        </table>
    </form>
</body>

</html>