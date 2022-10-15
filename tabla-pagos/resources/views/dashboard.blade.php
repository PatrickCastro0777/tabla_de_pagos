<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>Proximos pagos</h4>
    <form action="">
        <div class="mb-6">
            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del cliente" required="">
        </div>
        <div class="mb-6">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
        </div>
    </form>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Fecha pagos
                </th>
                <th scope="col" class="py-3 px-6">
                    Nombre Cliente
                </th>
                <th scope="col" class="py-3 px-6">
                    Apellido Cliente
                </th>
                <th scope="col" class="py-3 px-6">
                    Mora
                </th>
                <th scope="col" class="py-3 px-6">
                    Monto cuota
                </th>
                <th scope="col" class="py-3 px-6">
                    Total a pagar
                </th>
                <th scope="col" class="py-3 px-6">
                    Pagar
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach ($datos as $item)

                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item-> FechaPago}}
                    </th>
                    <td class="py-4 px-6">
                        {{$item-> NombreCliente}}
                    </td>
                    <td class="py-4 px-6">
                        {{$item-> ApellidoCliente}}
                    </td>
                    <td class="py-4 px-6">
                        {{$item-> Mora}}
                    </td>
                    <td class="py-4 px-6">
                        {{$item-> MontoPago}}
                    </td>
                    <td class="py-4 px-6">
                        {{$item-> TotalPago}}
                    </td>
                    <td class="py-4 px-6">
                        <button a href="#"  type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                    </td>
                </tr>

             @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
