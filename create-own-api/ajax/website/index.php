<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    


    <style>
        .comment blockquote{
            font-weight: bold;
            font-size: 13px;
        }
        .comment div{
            float: right;
            font-size: 30px;
            color: grey;

        }
        .comment span{
            font-size: 20px;
            color: grey;
        }
        .comment{
            width: 100%;
            max-width: 500px;
            box-shadow: 0px 0px 10px #aaa;
            padding: 1em;
            margin: 1em;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 14px;
        }
    </style>

<button onclick="get_data2()">Fetch Data</button>


    <div style="width: 100%; max-width: 500px; margin: auto;">
        <div class="output"></div>
        
        <button onclick="prev()">Prev</button>
        <button onclick="next()">Next</button>
    </div>


    
</body>

<script>

    let page = 1;
    function next() {
        page += 1;
        get_data2();
    }

    function prev() {
        page -= 1;
        if(page < 1) {
            page = 1;
        }
        get_data2();
    }

    function get_data2() {

        var output = document.querySelector(".output");
        output.innerHTML = "Loading...";

        const url = 'https://test-api-msw.000webhostapp.com/';
        // const url = 'http://localhost/api/api/index.php';
        
        fetch(url).then(function(response){

            return response.text();
        }).then(function(data){

            //output.innerHTML = "<pre>" + data;
            display_data(data);
        }).catch(function(err){

            output.innerHTML = err;
        });
    }

    function display_data(data){

        let output = document.querySelector(".output");
        output.innerHTML = data;

    }
    

</script>
</html>