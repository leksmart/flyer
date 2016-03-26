@inject('countries', 'App\Http\Utilities\Country')

{{csrf_field()}}

<div class="form-group">
        <label for="street">Street:</label>
        <input name="street" id="street" class="form-control" type="text" value="{{old('street')}}" required />
    </div>

    <div class="form-group">
        <label for="city">City:</label>
        <input name="city" type="text" class="form-control" id="city" value="{{old('city')}}" required/>
    </div>

    <div class="form-group">
        <label for="zip">Zip/Postal Code</label>
        <input name="zip" type="text" class="form-control" id="zip" value="{{old('zip')}}" required/>
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <select id="country" name="country" class="form-control">
            @foreach ($countries::all() as $country => $code)
            <option value="{{$code}}">{{$country}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="state">State:</label>
        <input name="state" type="text" value="{{old('state')}}" class="form-control" id="state" required/>

    </div>
    <hr/>

    <div class="form-group">
        <label for="price">Sale Price:</label>
        <input name="price" class="form-control" type="text" id="price" value="{{old('price')}}" required/>
    </div>

    <div class="form-group">
        <label for="description">Home Description:</label>
        <textarea name="description" type="text" id="description" class="form-control " rows="10" value="{{old('description')}}" required>
            {{old('description')}}
        </textarea>
    </div>

    

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Flyer</button>

    </div>
