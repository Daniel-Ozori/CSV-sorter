<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='styles.css' />
        <title>Dappy</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    
    <body>
        <div class='main_container'>
            <div class='menu' id='menu'>
                <div class='item'>Link 1</div>
                <div class='item'>Link 2</div>
                <div class='item'>Link 3</div>
                <div class='item'>Link 4</div>
                <div class='item'>Link 5</div>

            </div>
            <div class='content'>
                <div class='header'>
                    <img src='images/menu.png' id='menuBtn' style='cursor:pointer;'   height='30px'/>
                    <img src='images/lm-logo.png' class='header_image'  height='30px'/>
                    <img src='images/phone.png' style='cursor:pointer;' class='header_image'  height='30px'/>
                </div>
        
                <div class='container'>
                    <div class='section'>
                        <h1>Lance Montana</h1>
                        <h2>Bold, Italic and link elements</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla vehicula diam. Nunc nulla neque, finibus eu luctus sed, pulvinar a odio. 
                            Praesent metus massa, <a href=''>elementum id nisi sit amet, maximus elementum eros</a>. Sed gravida volutpat ante in pharetra. 
                            Vivamus faucibus iaculis convallis. Sed et dapibus purus. 
                            Suspendisse a tempor felis. Aliquam erat volutpat.</p>
                        <p>Proin fringilla orci non erat lacinia, et dignissim dui facilisis. Vestibulum non nisl eu quam pharetra tempor quis quis diam. 
                            Aliquam scelerisque, <a href=''>massa ac placerat sodales</a>, sapien massa tincidunt odio, sit amet ultricies sapien dui sed lorem</p>
                    </div>
                </div>
                <div class='container' style='background-color:#000000;'>
                    <div class='section'>
                        <h1 style='color:white;'>Responsive Images</h1>
                        <div class='res_images'>
                            <div class='res_image' href='images/placeholder.png'></div>
                            <div class='res_image' href='images/placeholder.png'></div>
                            <div class='res_image' href='images/placeholder.png'></div>
                        </div>
                    </div>
                </div>
                <div class='container' style='background-color:#efefef;'>
                    <div class='section'>
                        <h1>Upload CSV file</h1>
                        <p>This functionality will upload a CSV file and sort the whole file alphabetically 
                            according to the first column (excluding the title).
                            <br>
                            Once the file has been sorted alphabetically, the site will present a new file for download which will have the first 
                            row as column tiles and the rest wiill be sorted alphabetically.</p>
                        <p>There is an example of the original CSV file (countries.csv) you will need to work will along with the expected output CSV file
                            (countries-sorted.csv) in the task file you downloaded.</p>
                        <p>The sort function should work for all correctly formatted CSV files.</p> 
                        <form action='sorter.php' method='post' enctype='multipart/form-data'>
                            CSV file 
                            <input  name='file' type='file'/>
                            <input value='Upload and sort' name='upload' type='submit'/>
                        </form> 
                                
                    </div>
                </div>
                <div class='container'>
                    <div class='section'>
                        <h1>Lists & what not</h1>
                        <h2>Alpha/Roman List</h2>
                        <ol type="a">
                            <li> elementum id nisi sit amet, maximus elementum eros
                            <li> elementum id nisi sit amet, maximus elementum eros
                                <ol type='i'>
                                    <li> elementum id nisi sit amet, maximus elementum eros
                                    <li> elementum id nisi sit amet, maximus elementum eros
                                </ol>
                            <li> elementum id nisi sit amet, maximus elementum eros
                            <li> elementum id nisi sit amet, maximus elementum eros
                        </ol>
                    </div>
                </div>
                <div class='container footer'>
                    <div class='section'>
                        <p>@2020 Lance Montana</p>
                    </div>
                </div>
            </div>
        </div>  
        
    </body>
    <script src='scripts.js'></script>
</html>

