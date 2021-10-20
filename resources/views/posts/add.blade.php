@extends('layouts.layout')


@section('content')
    <div class="container">
        <h1>Ajouter new post</h1>

        <form action="">

            <div class="form-group">
                 <label>Titre</label>
                 <input type="text" class="form-control" name="title" required>
            </div>


            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5" required></textarea>
           </div>

           <button type="submit" class="btn btn-primary">Ajouter</button>



        </form>    
    </div>


@endsection