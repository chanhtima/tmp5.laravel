@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
<main class="min-h-[88vh]">
    <div  class="section-image-bg relative bg-[url('./img/bg-contact.jpg')] ">
        <div class="container relative z-[1]">
            <div class="flex -mx-4 flex-wrap py-16 md:py-24 2xl:py-32">
                <div class="w-full lg:w-1/2 p-4">
                    <h2 class="text-40 xl:text-60 font-medium text-white">Contact Us</h2>
                </div>
                <div class="w-full lg:w-1/2 space-y-6 p-4">
                    <div class="block">
                        <a href="{{ url('mailto:sanorita.clinic@jmail.com') }}"  class="flex items-center space-x-3" >
                            <img  src="{{ Module::asset('frontend:img/icon/iconcontact1.png') }}" alt="icon">
                            <p class="text-white text-18">pangtea.cafe@jmail.com</p>
                        </a>
                    </div>
                    <div class="block">
                        <a  href="{{ url('tel:+668 888 888') }}" class="flex items-center space-x-3" >
                            <img  src="{{ Module::asset('frontend:img/icon/iconcontact2.png') }}" alt="icon">
                            <p class="text-white text-18"> +668 888 888 (Auto)</p>
                        </a>
                    </div>
                    <div class="block">
                        <a href="{{ url('/') }}"  class="flex  items-start space-x-3" >
                            <img src="{{ Module::asset('frontend:img/icon/iconcontact3.png') }}" alt="icon">
                            <p class="text-white text-18">PANG&TEA.CAFE Fortune Town Branch 1, Ratchadaphisek Road, Din Daeng, Din
                                Daeng,
                                Bangkok 10400</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
      {{-- map --}}
      <div class="map-wrapper">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.345304164091!2d100.56256667592457!3d13.758038197147457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d4918d39f69%3A0x7c82b5cfabbf1f4a!2sFortune%20Town!5e0!3m2!1sen!2sth!4v1689153723520!5m2!1sen!2sth"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      {{-- form --}}
      <div class="bg-[url('./img/bg-contact-form.jpg')] bg-cover bg-no-repeat bg-bottom py-12">
        <div class="container">
            <form class="w-full md:w-10/12 xl:w-8/12 mx-auto sm:py-6 xl:py-12 bg-white tn:px-4 sm:px-8 bg-opacity-0 rounded-xl">
                <h2 class="text-center font-medium text-32 xl:text-38 mb-6 line-pass line-pass">Get in touch</h2>
             <div class="flex flex-wrap -mx-2">
               @php
               $contactForm =[
                        [
                            'id'=> '0',
                            'name'=> 'name',
                            'label'=> 'Name',
                            'placeholder' => 'Input your name',
                            'type'=> 'text',
                        ],
                        [
                            'id'=> '1',
                            'name'=> 'email',
                            'label'=> 'Email',
                            'placeholder' => 'Ex. yourmail@gmail.com',
                            'type'=> 'email',
                        ],
                        [
                            'id'=> '2',
                            'name'=> 'phone',
                            'label'=> 'Phone Number',
                            'placeholder' => 'Ex. +66 1223 3764',
                            'type'=> 'text',
                        ],
                        [
                            'id'=> '3',
                            'name'=> 'subject',
                            'label'=> 'Subject',
                            'placeholder' => 'Input your subject',
                            'type'=> 'text',
                        ],
                    ];
               @endphp
                 @foreach ($contactForm as $index => $form)
                <div class="w-full lg:w-1/2 p-2">
                    <x-frontend::form.FormInput
                    :name=" $form['name']"
                    :label=" $form['label']"
                    :placeholder=" $form['placeholder']"
                    :type=" $form['type']"
                    >
                    </x-frontend>
                </div>
                @endforeach
           
                <div class="w-full  p-2">
                    <x-frontend::form.FormTextArea
                    name=" subject"
                    label=" How can we help?"
                    placeholder="Input Message"
                    >
                    </x-frontend>
                </div>
                <div class="w-full p-2">
                    <div class="form-control mb-2">
                        <label class="label cursor-pointer justify-normal items-start sm:items-center">
                            <input type="checkbox" checked="checked" class="checkbox checkbox-primary h-5 w-5 pt-5 sm:pt-0" />
                            <span  class="label-text pl-2 text-16 ">I acknowledge that I have read and agree    <a href="{{url('/policy')}}" class=" sm:ml-2  border-b border-black break-words">Privacy Policy</a>
                        </label>
                      </div>
                      <img src="{{ Module::asset('frontend:img/recapchar.png') }}" alt="recapchar mockup" class="w-[350px]">
                  
                </div>
                <button type="submit" class="btn btn-ghost rounded-full mx-auto mt-6 border border-gray-500 px-16" onclick="formcontact.showModal()">
                    Send Message
                  </button>
            </div>
            </form>
        </div>
      </div>
    
      <x-frontend::modal.ModalBasic name="formcontact" class="w-11/12 max-w-lg ">
      @slot('content')
      <div class="p-8">

          <img src="{{ Module::asset('frontend:img/icon/iconcheck.png') }}" alt="modal" class="w-10 mx-auto mb-4" >
          <h2 class=" text-center mb-4"><span class=" font-semibold mr-2">ขอบคุณ</span>ข้อความของคุณถูกส่งไปเรียบร้อย</h2>
          
      </div>
      @endslot
</x-frontend>
        </main>
@endsection

@section('script')

@endsection
