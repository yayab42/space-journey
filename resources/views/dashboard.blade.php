@extends('app')
@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-dark text-bold pb-5">Voici tes commandes ma gueule !</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Date de commande</th>
                                <th scope="col">Date de livraison</th>
                                <th scope="col"> Numéro de commande</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>
                                    18/12/2020
                                </td>
                                <td>
                                    01/05/2021
                                </td>
                                <td>
                                    20202020
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-app-layout>
@endsection
