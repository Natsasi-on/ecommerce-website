<?php include("./common/header-admin.php"); ?>
<section>
    <h1>Customer</h1>
    <form action="" method="" class="table-width">
        <table>
            <thead>
                <th>Name</th>
                <th>Start Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <tr>
                    <td>Jane Lee</td>
                    <td>Feb 1, 2023</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button class="btn-trash">
                            <svg viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                                <path d="M5.5,5.5C5.8,5.5,6,5.7,6,6v6c0,0.3-0.2,0.5-0.5,0.5S5,12.3,5,12V6C5,5.7,5.2,5.5,5.5,5.5z M8,5.5c0.3,0,0.5,0.2,0.5,0.5v6
               c0,0.3-0.2,0.5-0.5,0.5c-0.3,0-0.5-0.2-0.5-0.5V6C7.5,5.7,7.7,5.5,8,5.5z M11,6c0-0.3-0.2-0.5-0.5-0.5S10,5.7,10,6v6
               c0,0.3,0.2,0.5,0.5,0.5S11,12.3,11,12V6z" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5,3c0,0.6-0.4,1-1,1H13v9c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V4H2.5
               c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1H6c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1h3.5c0.6,0,1,0.4,1,1V3z M4.1,4L4,4.1V13c0,0.6,0.4,1,1,1
               h6c0.6,0,1-0.4,1-1V4.1L11.9,4H4.1z M2.5,3V2h11v1H2.5z" />
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Lee</td>
                    <td>Feb 1, 2023</td>
                    <td><input type="checkbox" value=""></td>
                    <td><button class="btn-trash">
                            <svg viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                                <path d="M5.5,5.5C5.8,5.5,6,5.7,6,6v6c0,0.3-0.2,0.5-0.5,0.5S5,12.3,5,12V6C5,5.7,5.2,5.5,5.5,5.5z M8,5.5c0.3,0,0.5,0.2,0.5,0.5v6
               c0,0.3-0.2,0.5-0.5,0.5c-0.3,0-0.5-0.2-0.5-0.5V6C7.5,5.7,7.7,5.5,8,5.5z M11,6c0-0.3-0.2-0.5-0.5-0.5S10,5.7,10,6v6
               c0,0.3,0.2,0.5,0.5,0.5S11,12.3,11,12V6z" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5,3c0,0.6-0.4,1-1,1H13v9c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V4H2.5
               c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1H6c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1h3.5c0.6,0,1,0.4,1,1V3z M4.1,4L4,4.1V13c0,0.6,0.4,1,1,1
               h6c0.6,0,1-0.4,1-1V4.1L11.9,4H4.1z M2.5,3V2h11v1H2.5z" />
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="button-container">
            <button class="btn">Edit Selected Items</button>
        </div>
    </form>
</section>
<?php include("./common/Footer-admin.php"); ?>