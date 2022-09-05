

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    //$concepts CON Blade
    @if ($year == date('Y'))
    <table border="1" >
        <thead>    
            <tr>
                <th>Concepto</th>
                <th>Precio</th>
                <th>Imp (%)</th>
                <th>Imp </th>
                <th>Descuento (%)</th>
                <th>Descuento   </th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @php
            $totalPrecio=0;
            $totalImp=0;
            $totalDes=0;
            $totalFinal=0;
        @endphp
        @foreach ($concepts as $c) 
            @php
                $imp= $c['precio'] * ($c['taxed'] / 100);
                $desc=$c['precio']*($c['discount']/100);
                $total=$c['precio'] + $imp - $desc;

                $totalPrecio+=  $c['precio'] ;
                $totalImp += $imp;
                $totalDes += $desc;
                $totalFinal += $total;
            @endphp 
            <tr>
                <td>
                    @if (strlen($c['concepto'] < $maxChars))
                        {{ $c['concepto'] }}
                    @else
                        @php 
                            $aux=substr($c['concepto'],0 , $maxChars);

                        @endphp
                        {{ substr($aux, 0, strrpos($aux, " ") )  }}
                    @endif
                </td>
                <td>{{ $c['precio'] }}</td>
                <td>{{ $c['taxed'] }}</td>
                <td>{{ $imp }} </td>
                <td>{{ $c['discount'] }}</td>
                <td>{{ $desc }}</td>
                <td>{{ $total }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3">
                <td> {{$totalPrecio}}</td>
                <td> {{$totalImp}}</td>
                <td> {{$totalDes}}</td>
                <td> {{$totalFinal}}</td>
            </td>
        </tr>        
        </tbody>
    </table>
    @endif

    //$concepts CON PHP
    <table border="1">
        <thead>    
            <tr>
                <th>Concepto</th>
                <th>Precio</th>
                <th>Imp (%)</th>
                <th>Imp </th>
                <th>Descuento (%)</th>
                <th>Descuento   </th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
        @php
            $totalPrecio=0;
            $totalImp=0;
            $totalDes=0;
            $totalFinal=0;
            foreach ($concepts as $c) {
                $imp= $c['precio'] * ($c['taxed'] / 100);
                $desc=$c['precio']*($c['discount']/100);
                $total=$c['precio'] + $imp - $desc;

                $totalPrecio+=  $c['precio'] ;
                $totalImp += $imp;
                $totalDes += $desc;
                $totalFinal += $total;
                echo  "<tr>";
                    //Para hacer conceptos para que no acabe sin su palabra
                    if(strlen($c['concepto']) <= $maxChars)
                        echo  "<td>" . $c['concepto'] . "</td>";
                    else{
                        $auxString=substr($c['concepto'],0,$maxChars);
                        $auxSubString=substr($auxString, 0 , strrpos($auxString," "));
                        echo  "<td>" . $auxSubString. "</td>";
                    }
                    echo  "<td>" . $c['precio'] . "</td>";
                    echo  "<td>" . $c['taxed'] .  "</td>";
                    echo  "<td>" . $imp .  "</td>";
                    echo  "<td>" . $c['discount'] . "</td>";
                    echo  "<td>" . $desc .  "</td>";
                    echo  "<td>" . $total .  "</td>";
                echo  "</tr>";
            }
            echo  "<tr>";
                    echo  "<td colspan=\"3\"></td>";
                    echo  "<td>" . $totalPrecio . "</td>";
                    echo  "<td>" . $totalImp .  "</td>";
                    echo  "<td>" . $totalDes .  "</td>";
                    echo  "<td>" . $totalFinal. "</td>";
            echo  "</tr>";
        @endphp
        </tbody>

        
    </table>
</body>
    <script>
        var concepts=JSON.parse('{!! $jsonConcepts !!}');
    </script>
</html>









