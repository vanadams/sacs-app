@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" id="beneficiary-form-container">
            <h1>Puno ng Pamilya</h1>
            <form action="{{ route('beneficiaries.store') }}" method="POST" id="beneficiary-form">
                @csrf
                @include('beneficiaries.form')
                <input type="hidden" name="family_members" id="family-members-data">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" id="add-family-button">Add Family</button>
            </form>
        </div>
        <div class="col-md-6" id="family-member-container" style="display: none;">
            <h2>Add Family Member</h2>
            <div id="family-members">
                <h3>Family Members</h3>
                <table class="table table-striped" id="family-members-table">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Ext</th>
                            <th>Relasyon sa Puno ng Pamilya</th>
                            <th>Petsa ng Kapanganakan</th>
                            <th>Kasarian</th>
                            <th>Trabaho</th>
                            <th>Sektor</th>
                            <th>Kondisyon ng Kalusugan</th>
                            <th>Aksyon</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div id="family-member-form">
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="family-last-name">Last Name</label>
                        <input type="text" class="form-control" id="family-last-name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="family-first-name">First Name</label>
                        <input type="text" class="form-control" id="family-first-name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="family-middle-name">Middle Name</label>
                        <input type="text" class="form-control" id="family-middle-name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="family-ext">Ext</label>
                        <input type="text" class="form-control" id="family-ext" placeholder="Jr/Sr">
                    </div>
                </div>
                <div class="form-group">
                    <label for="family-relation">Relasyon sa Puno ng Pamilya</label>
                    <input type="text" class="form-control" id="family-relation" required>
                </div>
                <div class="form-group">
                    <label for="family-dob">Petsa ng Kapanganakan</label>
                    <input type="date" class="form-control" id="family-dob" required>
                </div>
                <div class="form-group">
                    <label for="family-gender">Kasarian</label>
                    <select class="form-control" id="family-gender" required>
                        <option value="lalaki">Lalaki</option>
                        <option value="babae">Babae</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="family-job">Trabaho</label>
                    <input type="text" class="form-control" id="family-job">
                </div>
                <div class="form-group">
                    <label for="family-sektor">Sektor</label>
                    <select class="form-control" id="family-sektor">
                        <option value="">---Wala---</option>
                        <option value="A">A - Nakakatanda</option>
                        <option value="B">B - Buntis</option>
                        <option value="C">C - Nagpapasusong ina</option>
                        <option value="D">D - PWD</option>
                        <option value="E">E - Solo Parent</option>
                        <option value="F">F - Walang Tirahan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="family-health">Kondisyon ng Kalusugan</label>
                    <select class="form-control" id="family-health">
                        <option value="">---Wala---</option>
                        <option value="1">1 - Sakit sa Puso</option>
                        <option value="2">2 - Altapresyon</option>
                        <option value="3">3 - Sakit sa Baga</option>
                        <option value="4">4 - Diyabetis</option>
                        <option value="5">5 - Kanser</option>
                    </select>
                </div>
                <button type="button" class="btn btn-success" id="save-family-button">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('add-family-button').addEventListener('click', function() {
    document.getElementById('beneficiary-form-container').classList.remove('col-md-12');
    document.getElementById('beneficiary-form-container').classList.add('col-md-6');
    document.getElementById('family-member-container').style.display = 'block';
});

document.getElementById('save-family-button').addEventListener('click', function() {
    const lastName = document.getElementById('family-last-name').value;
    const firstName = document.getElementById('family-first-name').value;
    const middleName = document.getElementById('family-middle-name').value;
    const ext = document.getElementById('family-ext').value;
    const relation = document.getElementById('family-relation').value;
    const dob = document.getElementById('family-dob').value;
    const gender = document.getElementById('family-gender').value;
    const job = document.getElementById('family-job').value;
    const sektor = document.getElementById('family-sektor').value;
    const health = document.getElementById('family-health').value;

    const sektorMap = {
        'A': 'Nakakatanda',
        'B': 'Buntis',
        'C': 'Nagpapasusong ina',
        'D': 'PWD',
        'E': 'Solo Parent',
        'F': 'Walang Tirahan'
    };

    const healthMap = {
        '1': 'Sakit sa Puso',
        '2': 'Altapresyon',
        '3': 'Sakit sa Baga',
        '4': 'Diyabetis',
        '5': 'Kanser'
    };

    const sektorDisplay = sektorMap[sektor] || '';
    const healthDisplay = healthMap[health] || '';

    // Check if required fields are filled out
    if (lastName && firstName && relation && dob && gender) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${lastName}</td>
            <td>${firstName}</td>
            <td>${middleName || ''}</td>
            <td>${ext || ''}</td>
            <td>${relation}</td>
            <td>${dob}</td>
            <td>${gender}</td>
            <td>${job || ''}</td>
            <td>${sektorDisplay}</td>
            <td>${healthDisplay}</td>
            <td><button type="button" class="btn btn-danger btn-sm delete-family-button">Delete</button></td>
        `;
        document.querySelector('#family-members-table tbody').appendChild(row);

        document.getElementById('family-last-name').value = '';
        document.getElementById('family-first-name').value = '';
        document.getElementById('family-middle-name').value = '';
        document.getElementById('family-ext').value = '';
        document.getElementById('family-relation').value = '';
        document.getElementById('family-dob').value = '';
        document.getElementById('family-gender').value = '';
        document.getElementById('family-job').value = '';
        document.getElementById('family-sektor').value = '';
        document.getElementById('family-health').value = '';

        row.querySelector('.delete-family-button').addEventListener('click', function() {
            row.remove();
        });
    } else {
        alert('Please fill out all required fields.');
    }

    // Collect data from table rows
    const familyMembersData = [];
    document.querySelectorAll('#family-members-table tbody tr').forEach(row => {
        const cells = row.querySelectorAll('td');
        familyMembersData.push({
            last_name: cells[0].textContent,
            first_name: cells[1].textContent,
            middle_name: cells[2].textContent,
            extension_name: cells[3].textContent,
            relasyon_sa_benepisyaryo: cells[4].textContent,
            petsa_ng_kapanganakan: cells[5].textContent,
            kasarian: cells[6].textContent,
            trabaho: cells[7].textContent,
            sektor: cells[8].textContent,
            kondisyon_ng_kalusugan: cells[9].textContent
        });
    });

    // Update hidden input field with JSON data
    document.getElementById('family-members-data').value = JSON.stringify(familyMembersData);
});

// Make sure `family-members-data` has a default value if no family members are added
document.getElementById('beneficiary-form').addEventListener('submit', function() {
    const familyMembersData = document.getElementById('family-members-data').value;
    if (!familyMembersData) {
        document.getElementById('family-members-data').value = JSON.stringify([]);
    }
});

</script>
@endsection
