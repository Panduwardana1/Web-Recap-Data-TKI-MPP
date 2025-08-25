@vite('rosources/css/app.css')
<div>
    <form action="{{ route('admin.company.store') }}" method="POST">
        @csrf
        <div>
            <span>Company Name</span>
            <input type="text" name="name" title="company name" required>
        </div>

        <div>
            <span>Company Address</span>
            <input type="text" name="address" title="company address" required>
        </div>
        <div>
            <span>Phone</span>
            <input type="text" name="phone" title="phone number" required>
        </div>
        <button type="submit">Submit</button>
        <button>
            <a href="{{ route('admin.company') }}">Cancel</a>
        </button>
    </form>
</div>
