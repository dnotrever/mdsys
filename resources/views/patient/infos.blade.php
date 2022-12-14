@extends('layouts.app')

@section('title', 'Paciente')

@section('content')

    <link rel="stylesheet" href="/css/patient/infos.css">

    <div class="row h-100 m-0">

        <div class="patient-menu p-0 col-2">
            @include('partials.patient-menu')
        </div>

        <div class="patient-infos col-10">

            <form class="patient-infos-form" action="/patient/update/{{ $patient->id }}" method="POST" enctype="multipart/form-data">
    
                @csrf
                @method('PUT')
    
                <div class="row">

                    <div class="d-flex p-0 mb-4">

                        <h3 class="align-self-center m-0">
                            {{ $patient->id }} – {{ $patient->name }} (
                                {{
                                    date_diff(
                                        date_create(date('d-m-Y', strtotime($patient->birth))),
                                        date_create(date('Y-m-d'))
                                    )->format('%y')
                                }}
                            anos )
                        </h3>

                        <div class="form-check form-switch m-0 ms-auto me-3">
                            <input id="actived" name="actived" type="checkbox" value="{{ $patient->actived }}" {{ ($patient->actived == 1 ? ' checked' : '') }} class="form-check-input">
                        </div>

                        <div class="form-submit px-2">
                            <button class="btn btn-primary text-uppercase px-4" type="submit">Salvar</button>
                        </div>

                    </div>

                </div>
    
                <div class="row">

                    <div class="form-photo d-flex flex-column justify-content-center align-items-center col-2">

                        <div class="img-wrapper text-center">
                            @if ($patient->photo)
                                <img id="photo-preview" class="border img-fluid" src="/img/patients/{{ $patient->photo }}" alt="paciente sem foto">
                            @else
                                <img id="photo-preview" class="border img-fluid" src="/img/nophoto.jpg" alt="paciente sem foto">
                            @endif
                        </div>

                        <label for="photo" class="border-top-0 rounded-0 rounded-bottom text-center">
                            <i class="fa-solid fa-camera me-2"></i>
                            Alterar Foto
                        </label>
                        <input id="photo" name="photo" type="file" class="form-control shadow-no border-top-0 rounded-0 rounded-bottom">
                        
                    </div>
    
                    <div class="form-infos col-10 p-0">
    
                        <div class="group-field">
    
                            <div class="row">
    
                                <div class="subgroup-row col-12">
        
                                    <div class="form-group w-xxl">
                                        <label for="name" class="form-label">Nome</label>
                                        <input id="name" type="text" name="name" value="{{ $patient->name }}" class="form-control" required>
                                    </div>
        
                                    <div class="form-group w-sm">
                                        <label for="birth" class="form-label">Nascimento</label>
                                        <input id="birth" type="date" name="birth" value="{{ $patient->birth }}" class="form-control" required>
                                    </div>
        
                                    <div class="form-group w-sm">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input id="cpf" type="text" name="cpf" value="{{ $patient->cpf }}" class="form-control" oninput="justNumbers(this, 11)">
                                    </div>
        
                                    <div class="form-group w-sm">
                                        <label for="rg" class="form-label">RG</label>
                                        <input id="rg" type="text" name="rg" value="{{ $patient->rg }}" class="form-control" oninput="justNumbers(this, 9)">
                                    </div>
        
                                    <div class="form-group w-md">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-select">
                                            <option selected disabled>Selecione</option>
                                            <option value="Feminino">Feminino</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Não Informado">Não Informado</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group w-xs">
                                        <label for="weight" class="form-label">Peso</label>
                                        <div class="input-group">
                                            <input id="weight" type="text" name="weight" value="{{ $patient->weight }}" class="form-control" oninput="justNumbers(this, 3)">
                                            <span class="input-group-text">kg</span>
                                        </div>
                                    </div>
        
                                    <div class="form-group w-xs">
                                        <label for="height" class="form-label">Altura</label>
                                        <div class="input-group">
                                            <input id="height" type="text" name="height" value="{{ $patient->height }}" maxlength="3" class="form-control" oninput="justNumbers(this, 3)">
                                            <span class="input-group-text">cm</span>
                                        </div>
                                    </div>
    
                                </div>
    
                                <div class="subgroup-row col-12">
    
                                    <div class="form-group w-md">
                                        <label for="marital-status" class="form-label">Estado Civil</label>
                                        <select id="marital-status" name="marital_status" class="form-select">
                                            <option selected disabled>Selecione</option>
                                            <option value="Solteiro(a)">Solteiro(a)</option>
                                            <option value="Casado(a)">Casado(a)</option>
                                            <option value="Divorciado(a)">Divorciado(a)</option>
                                            <option value="Viúvo(a)">Viúvo(a)</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group w-lg">
                                        <label for="schooling" class="form-label">Escolaridade</label>
                                        <select id="schooling" name="schooling" class="form-select">
                                            <option selected disabled>Selecione</option>
                                            <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                            <option value="Fundamental Complet">Fundamental Completo</option>
                                            <option value="Médio Incompleto">Médio Incompleto</option>
                                            <option value="Médio Completo">Médio Completo</option>
                                            <option value="Superior Incompleto">Superior Incompleto</option>
                                            <option value="Superior Completo">Superior Completo</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group w-xl">
                                        <label for="profession" class="form-label">Profissão</label>
                                        <input id="profession" type="text" name="profession" value="{{ $patient->profession }}" class="form-control">
                                    </div>
        
                                    <div class="form-group w-lg">
                                        <label for="naturalness" class="form-label">Naturalidade</label>
                                        <input id="naturalness" type="text" name="naturalness" value="{{ $patient->naturalness }}" class="form-control">
                                    </div>
        
                                    <div class="form-group w-lg">
                                        <label for="nationality" class="form-label">Nacionalidade</label>
                                        <input id="nationality" type="text" name="nationality" value="{{ $patient->nationality }}" class="form-control">
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
    
                        <div class="group-field">

                            <div class="row">

                                <div class="subgroup-row col-12">
    
                                    <div class="form-group w-lg">
                                        <label for="phone" class="form-label">Telefone</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                            <input id="phone" type="text" name="phone" value="{{ $patient->phone }}" class="form-control" oninput="justNumbers(this, 10)">
                                        </div>
                                    </div>
            
                                    <div class="form-grpup w-lg">
                                        <label for="cellphone" class="form-label">Celular</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-mobile-screen-button"></i>
                                            </span>
                                            <input id="cellphone" type="text" name="cellphone" value="{{ $patient->cellphone }}" class="form-control" oninput="justNumbers(this, 11)">
                                        </div>
                                    </div>
            
                                    <div class="form-grpup w-lg">
                                        <label for="whatsapp" class="form-label">WhatsApp</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </span>
                                            <input id="whatsapp" type="text" name="whatsapp" value="{{ $patient->whatsapp }}" class="form-control" oninput="justNumbers(this, 11)">
                                        </div>
                                    </div>
            
                                    <div class="form-grpup w-xxl">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-at"></i>
                                            </span>
                                            <input id="email" type="text" name="email" value="{{ $patient->email }}" class="form-control">
                                        </div>
                                    </div>

                                </div>

                            </div>
    
                        </div>
                        
                    </div>

                </div>
    
                <div class="row">
    
                    <div class="form-notes col-3 p-0">

                        <div class="group-field py-3">
                            
                            <label for="notes" class="form-label">Observação</label>
                            <textarea id="notes" name="notes" class="form-control" rows="4">{{ $patient->notes }}</textarea>

                        </div>
    
                    </div>
    
                    <div class="form-address col-9 p-0">
    
                        <div class="group-field">

                            <div class="row">
        
                                <div class="subgroup-row col-12">
        
                                    <div class="form-group w-sm">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input id="cep" type="text" name="cep" value="{{ $patient->address->cep }}" class="form-control" oninput="justNumbers(this, 8)">
                                    </div>
            
                                    <div class="form-group w-xxl">
                                        <label for="street" class="form-label">Rua</label>
                                        <input id="street" type="text" name="street" value="{{ $patient->address->street }}" class="form-control">
                                    </div>
            
                                    <div class="form-group w-xs">
                                        <label for="home-number" class="form-label">Número</label>
                                        <input id="home-number" type="text" name="home_number" value="{{ $patient->address->home_number }}" maxlength="6" class="form-control" oninput="justNumbers(this, 6)">
                                    </div>
            
                                    <div class="form-group w-lg">
                                        <label for="complement" class="form-label">Complemento</label>
                                        <input id="complement" type="text" name="complement" value="{{ $patient->address->complement }}" class="form-control">
                                    </div>
        
                                </div>
        
                                <div class="subgroup-row col-12">
        
                                    <div class="form-group w-xl">
                                        <label for="district" class="form-label">Bairro</label>
                                        <input id="district" type="text" name="district" value="{{ $patient->address->district }}" class="form-control">
                                    </div>
            
                                    <div class="form-group w-xl">
                                        <label for="city" class="form-label">Cidade</label>
                                        <input id="city" type="text" name="city" value="{{ $patient->address->city }}" class="form-control">
                                    </div>
            
                                    <div class="form-group w-md">
                                        <label for="state" class="form-label">Estado</label>
                                        <input id="state" type="text" name="state" value="{{ $patient->address->state }}" class="form-control">
                                    </div>
            
                                    <div class="form-group w-md">
                                        <label for="country" class="form-label">País</label>
                                        <input id="country" type="text" name="country" value="{{ $patient->address->country }}" class="form-control">
                                    </div>
        
                                </div>
        
                            </div>

                        </div>
    
                    </div>
    
                </div>

                <div class="row">
                    <p class="text-muted">
                        Paciente cadastrado por
                        {{ $patient->register_user }}
                        em
                        {{ date('d/m/Y', strtotime($patient->created_at)) }}
                        às
                        {{ date('H:m', strtotime($patient->created_at)) }}
                    </p>
                </div>
            
            </form>
    
        </div>

    </div>

    <script>

        const infos = document.querySelector('#patient-infos')
        infos.className += ' selected'

        // - - -  - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - 

        function justNumbers(info, max) {
            info.setAttribute('maxlength', max);
            info.value = info.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')
        }

        // - - -  - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - 

        function optionSelected(tag, info) {
            for (const [key, value] of Object.entries(tag)) {
                if (value.text === info) {
                    value.selected = true
                }
            }
        }

        const gender = document.querySelector('#gender')
        genderInfo = '{{ $patient->gender }}'
        optionSelected(gender, genderInfo)

        const maritalStatus = document.querySelector('#marital-status')
        maritalStatusInfo = '{{ $patient->marital_status }}'
        optionSelected(maritalStatus, maritalStatusInfo)

        const schooling = document.querySelector('#schooling')
        schoolingInfo = '{{ $patient->schooling }}'
        optionSelected(schooling, schoolingInfo)

        // - - -  - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - 

        function readPhoto() {
            if (this.files && this.files[0]) {
                let file = new FileReader()
                file.onload = e => {
                    preview.src = e.target.result
                }
                file.readAsDataURL(this.files[0])
            }
        }

        const preview = document.querySelector('#photo-preview')
        const photo = document.querySelector('#photo')
        photo.addEventListener('change', readPhoto)

        // - - -  - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - 

        const actived = document.querySelector('#actived')

        actived.addEventListener('change', () => {

            if (actived.checked) {
                actived.value = 1
            } else {
                actived.value = 0
            }
            
            console.log(actived.value)
        })

        // - - -  - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - -

        function getAddress() {

            if (cep.value.length >= 8) {

                const street = document.querySelector('#street')
                const complement = document.querySelector('#complement')
                const district = document.querySelector('#district')
                const city = document.querySelector('#city')
                const state = document.querySelector('#state')

                fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
                    .then(res => res.json())
                    .then(data => {
                        street.value = data.logradouro
                        complement.value = data.complemento
                        district.value = data.bairro
                        city.value = data.localidade
                        switch(data.uf) {
                            case 'AC':
                                state.value = 'Acre'
                                break
                            case 'AL':
                                state.value = 'Alagoas'
                                break
                            case 'AM':
                                state.value = 'Amazonas'
                                break
                            case 'AP':
                                state.value = 'Amapá'
                                break
                            case 'BA':
                                state.value = 'Bahia'
                                break
                            case 'CE':
                                state.value = 'Ceará'
                                break
                            case 'DF':
                                state.value = 'Distrito Federal'
                                break
                            case 'ES':
                                state.value = 'Espírito Santo'
                                break
                            case 'GO':
                                state.value = 'Goiás'
                                break
                            case 'MA':
                                state.value = 'Maranhão'
                                break
                            case 'MG':
                                state.value = 'Minas Gerais'
                                break
                            case 'MS':
                                state.value = 'Mato Grosso do Sul'
                                break
                            case 'MT':
                                state.value = 'Mato Grosso'
                                break
                            case 'PA':
                                state.value = 'Pará'
                                break
                            case 'PB':
                                state.value = 'Paraíba'
                                break
                            case 'PE':
                                state.value = 'Pernambuco'
                                break
                            case 'PI':
                                state.value = 'Piauí'
                                break
                            case 'PR':
                                state.value = 'Paraná'
                                break
                            case 'RJ':
                                state.value = 'Rio de Janeiro'
                                break
                            case 'RN':
                                state.value = 'Ro Grande do Norte'
                                break
                            case 'RO':
                                state.value = 'Rondônia'
                                break
                            case 'RR':
                                state.value = 'Roraima'
                                break
                            case 'RS':
                                state.value = 'Rio Grande do Sul'
                                break
                            case 'SC':
                                state.value = 'Santa Catarina'
                                break
                            case 'SE':
                                state.value = 'Sergipe'
                                break
                            case 'SP':
                                state.value = 'São Paulo'
                                break
                            case 'TO':
                                state.value = 'Tocantins'
                                break
                        }
                    })
                    .catch(err => console.log(err))

            } else {
                street.value = ''
                complement.value = ''
                district.value = ''
                city.value = ''
                state.value = ''
            }

        }

        const cep = document.querySelector('#cep')
        cep.addEventListener('input', getAddress)

    </script>

@endsection