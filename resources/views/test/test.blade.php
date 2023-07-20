<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    #myUL {
        display: none;
    }
</style>

<body>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

    <ul id="myUL">
        @foreach ($result as $key => $value)
            {{-- <option selected value="{{ $key }}">{{ $value->name }}</option>   --}}
            <li onclick="newElement('{{ $value->name }}')"><a href="#">{{ $value->name }}</a></li>
        @endforeach
        {{-- <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li> --}}
    </ul>

    <ul id="resultUL">

    </ul>





    {{-- <h1>hello</h1>

    <input type="text" name="" id="" oninput="handleValueChange()">

    @if ($result)
        @foreach ($result as $key => $value)
            <option selected value="{{ $key }}">{{ $value->name }}</option>  
        @endforeach 
    @endif --}}

    <script>
        async function handleValueChange() {
            console.log("first")
            const response = await fetch("/products/list");
            // axios
            // .get('/products/list')
            // .then((response) => {
            // })
            // .catch((response) => {
            //   console.log(response.data.errors);
            // });
        }

        function newElement(value) {
            console.log(value)
            var li = document.createElement("li");
            //   var inputValue = document.getElementById("myInput").value;
            var t = document.createTextNode(value);
            li.appendChild(t);
            document.getElementById("resultUL").appendChild(li);
        }








        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");


            if (myInput.value !== '') {
                ul.style.display = 'block';
            } else {
                ul.style.display = 'none';
            }


            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>
