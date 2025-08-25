<div>
    <form action="{{ route('admin.company.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <span>Company Name</span>
            <input type="text" name="name" value="{{ old('name',$company->name) }}" title="company name" required>
        </div>

        <div>
            <span>Company Address</span>
            <input type="text" name="address" value="{{ old('address',$company->address) }}" title="company address" required>
        </div>
        <div>
            <span>Phone</span>
            <input type="text" name="phone" value="{{ old('phone',$company->phone) }}" title="phone number" required>
        </div>
        <button type="submit">Submit</button>
        <button>
            <a href="{{ route('admin.company') }}">Cancel</a>
        </button>
    </form>
</div>
