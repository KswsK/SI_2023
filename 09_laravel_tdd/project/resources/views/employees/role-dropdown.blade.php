<style>
    .custom-select select {
        color: transparent;
        width: 20px;
        text-align: center;
    }
    .custom-select option {
        color: #000;
    }
</style>

<form action="/employee/change-role/{{$user->id}}" method="POST" class="inline-block ml-2">
    @csrf
    @method('PUT')
    <div class="relative custom-select">
        <select name="role" class="appearance-none border border-gray-300 rounded-md text-gray-600 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 pl-2 pr-8 py-1" onchange="this.form.submit()">
            <option value="1" @if($user->role == 1) selected @endif>Pracownik</option>
            <option value="2" @if($user->role == 2) selected @endif>Kierownik</option>
            <option value="3" @if($user->role == 3) selected @endif>Recepcjonistka</option>
            <option value="4" @if($user->role == 4) selected @endif>Magazynier</option>
            <option value="5" @if($user->role == 5) selected @endif>Księgowa</option>
        </select>
    </div>
</form>
