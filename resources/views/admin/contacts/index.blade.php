@extends('layouts.app')
@section('title','Salma | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Contacts Us</h2>
                                   
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                    
                                                </th>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Pesan</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $index => $contact)
                                                <tr>
                                                    <td>{{ $index + 1}}</td>
                                                    <td>{{ $contact->nama}}</td>
                                                    <td>{{ $contact->email}}</td>
                                                    <td>{{ $contact->pesan}}</td>
                                                    <td>
                                                        <a href="{{ route('contacts.edit', $contact->id)}}"><i class="fas fa-edit"></i></a>
                                                        |
                                                        <a href="{{ route('contacts.destroy', $contact->id)}}"><i class="fas fa-trash" style="color:red"></i></a>

                                                    </td>


                                            
                                            @endforeach
                                                
                                        </tbody>
                                       
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
