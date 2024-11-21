<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="container p-4 mx-auto">
    <div class="overflow-x-auto">
      <a href="{{ route('product-create') }}">
        <button class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 mb-6">
          Add product data
        </button>
      </a>

      <a href="{{ route('product-export-excel') }}">
        <button class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 mb-6">
          Export to Excel
        </button>
      </a>

      <table class="min-w-full border border-collapse border-gray-200">
        <thead>
          <tr class="bg-gray-100">
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">No</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">product Name</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Unit</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Type</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Information</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Qty</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Producer</th>
            <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $products)
            <tr class="bg-white">
              <td class="px-4 py-2 border border-gray-200">{{ $loop->iteration }}</td>
              <td class="px-4 py-2 border border-gray-200">{{ $products->product_name }}</td>
              <td class="px-4 py-2 border border-gray-200">{{ $products->unit }}</td>
              <td class="px-4 py-2 border border-gray-200">{{ $products->type }}</td>
              <td class="px-4 py-2 border border-gray-200">{{ $products->information }}</td>
              <td class="px-4 py-2 border border-gray-200">{{ $products->qty }}</td>
              <td class="px-4 py-2 border border-gray-200">{{ $products->producer }}</td>
              <td class="px-4 py-2 border border-gray-200">
              <a href="{{ route('product-edit', $products->id) }}" class="px-2 text-blue-600 hover:text-blue-800">Edit</a>
              <button class="px-2 text-red-600 hover:text-red-800" onclick="confirmDelete({{ $products->id }}, '{{ route('product-delete', $products->id) }}')">Hapus</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function confirmDelete(id, deleteUrl) {
      if (confirm('Are you sure you want to delete this data?')) {
        let form = document.createElement('form');
        form.method = 'POST';
        form.action = deleteUrl;

        // Add CSRF token
        let csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = '{{ csrf_token() }}';
        form.appendChild(csrfInput);

        // Add method spoofing for DELETE (HTML forms only support GET and POST)
        let methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';
        form.appendChild(methodInput);

        // Append form to body and submit
        document.body.appendChild(form);
        form.submit();
      }
    }
  </script>
</x-app-layout>
