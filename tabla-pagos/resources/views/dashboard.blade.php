<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
