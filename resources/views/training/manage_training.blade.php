@extends('layouts.theme_admin')

@section('content')

<style>
.toggle-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  border-radius: .5em;
  padding: .125em;
  box-shadow: 0 1px 1px rgb(255 255 255 / .6);
  /* resize for demo */
  font-size: 1.5em;
}

.toggle-checkbox {
  appearance: none;
  position: absolute;
  z-index: 1;
  border-radius: inherit;
  width: 100%;
  height: 100%;
  /* fix em sizing */
  font: inherit;
  opacity: 0;
  cursor: pointer;
}

.toggle-container {
  display: flex;
  align-items: center;
  position: relative;
  border-radius: .375em;
  width: 3em;
  height: 1.5em;
  background-color: #e8e8e8;
  box-shadow: inset 0 0 .0625em .125em rgb(255 255 255 / .2), inset 0 .0625em .125em rgb(0 0 0 / .4);
  transition: background-color .4s linear;
}

.toggle-checkbox:checked + .toggle-container {
  background-color: #2EC300;
}

.toggle-button {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  left: .0625em;
  border-radius: .3125em;
  width: 1.375em;
  height: 1.375em;
  background-color: #e8e8e8;
  box-shadow: inset 0 -.0625em .0625em .125em rgb(0 0 0 / .1), inset 0 -.125em .0625em rgb(0 0 0 / .2), inset 0 .1875em .0625em rgb(255 255 255 / .3), 0 .125em .125em rgb(0 0 0 / .5);
  transition: left .4s;
}

.toggle-checkbox:checked + .toggle-container > .toggle-button {
  left: 1.5625em;
}

.toggle-button-circles-container {
  display: grid;
  grid-template-columns: repeat(3, min-content);
  gap: .125em;
  position: absolute;
  margin: 0 auto;
}

.toggle-button-circle {
  border-radius: 50%;
  width: .125em;
  height: .125em;
  background-image: radial-gradient(circle at 50% 0, #f5f5f5, #c4c4c4);
}
</style>

<style>
  .checkmark {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: block;
      stroke-width: 2;
      stroke: #29cc39;
      stroke-miterlimit: 10;
      margin: 10% auto;
      box-shadow: inset 0px 0px 0px #ffffff;
      animation: fill 0.9s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
  }

  .checkmark__check {
      transform-origin: 50% 50%;
      stroke-dasharray: 48;
      stroke-dashoffset: 48;
      animation: stroke 0.8s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
  }

  @keyframes stroke {
      100% {
          stroke-dashoffset: 0
      }
  }

  @keyframes scale {

      0%,
      100% {
          transform: none
      }

      50% {
          transform: scale3d(1.1, 1.1, 1)
      }
  }

  @keyframes fill {
      100% {
          box-shadow: inset 0px 0px 0px 60px #fff
      }
  }

  .radius-20 {
      border-radius: 20px;
  }

  .checkmark__circle {
      stroke-dasharray: 166;
      stroke-dashoffset: 166;
      stroke-width: 2;
      stroke-miterlimit: 10;
      stroke: #7ac142;
      fill: none;
      animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
  }

  .checkmark {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      display: block;
      stroke-width: 2;
      stroke: #fff;
      stroke-miterlimit: 10;
      margin: 10% auto;
      box-shadow: inset 0px 0px 0px #7ac142;
      animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
  }

  .checkmark__check {
      transform-origin: 50% 50%;
      stroke-dasharray: 48;
      stroke-dashoffset: 48;
      animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
  }

  @keyframes stroke {
      100% {
          stroke-dashoffset: 0
      }
  }

  @keyframes scale {

      0%,
      100% {
          transform: none
      }

      50% {
          transform: scale3d(1.1, 1.1, 1)
      }
  }

  @keyframes fill {
      100% {
          box-shadow: inset 0px 0px 0px 30px #7ac142
      }
  }

  .detail-course{
      color: #000;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      margin-bottom: 5px;

  }

  @keyframes bounce-twice {
    0%, 20%, 50%, 80%, 100% {
      transform: translateY(0);
    }
    40% {
      transform: translateY(-30px);
    }
    60% {
      transform: translateY(-15px);
    }
  }

  .i_Highlight {
    animation: bounce-twice 2s;
  }
</style>

<!-- MODAL การจัดการเมนูหลักสูตร -->
<div class="modal fade" id="modal_menu_management" tabindex="-1" aria-labelledby="Label_menu_management" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Label_menu_management">การจัดการเมนูหลักสูตร</h5>
        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-circle-xmark"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-pills nav-pills-success mb-3" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="pill" href="#success-pills-home" role="tab" aria-selected="true">
                  <div class="d-flex align-items-center">
                    <div class="tab-icon"><i class="bx bxs-home font-18 me-1"></i>
                    </div>
                    <div class="tab-title">Home</div>
                  </div>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="pill" href="#success-pills-profile" role="tab" aria-selected="false">
                  <div class="d-flex align-items-center">
                    <div class="tab-icon"><i class="bx bxs-user-pin font-18 me-1"></i>
                    </div>
                    <div class="tab-title">Profile</div>
                  </div>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="pill" href="#success-pills-contact" role="tab" aria-selected="false">
                  <div class="d-flex align-items-center">
                    <div class="tab-icon"><i class="bx bxs-microphone font-18 me-1"></i>
                    </div>
                    <div class="tab-title">Contact</div>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
              </div>
              <div class="tab-pane fade" id="success-pills-profile" role="tabpanel">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              </div>
              <div class="tab-pane fade" id="success-pills-contact" role="tabpanel">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">การจัดการหลักสูตร</div>
	<div class="ms-auto">
		<div class="btn-group">
			<a href="{{ url('/training_create') }}" class="btn btn-success">
				<i class="fa-solid fa-layer-plus"></i> เพิ่มหลักสูตรใหม่
			</a>
		</div>
		<div class="btn-group">
			<span class="btn btn-warning" data-toggle="modal" data-target="#modal_menu_management">
				<i class="fa-solid fa-list-ol"></i> การจัดการเมนูหลักสูตร
			</span>
		</div>
	</div>
</div>

<hr>

<div class="card border-top border-0 border-4 border-danger">
  <div class="card-body p-5">
    <div class="card-title d-flex align-items-center">
      <h5 id="h5_training_types" class="mb-0 text-danger">
        <!--  -->
      </h5>
    </div>
    <hr>
    <div id="div_content" class="row">
      <!-- data -->
    </div>
  </div>
</div>

<script>

	document.addEventListener('DOMContentLoaded', function () {
        get_data_Training('all');
  });

  function get_data_Training(type){
    fetch("{{ url('/') }}/api/get_data_Training/" + type )
      .then(response => response.json())
      .then(result => {
          console.log(result);

          if(type == 'all'){
              document.querySelector('#h5_training_types').innerHTML = 'หลักสูตรทั้งหมด';
          }
          else{
              document.querySelector('#h5_training_types').innerHTML = result['type_article'];
          }

          let div_content = document.querySelector('#div_content');
              div_content.innerHTML = '';

          if(result['data_training']){
              for (let i = 0; i < result['data_training'].length; i++) {

                  let textWithoutHtml = `<br><br><br>`;
                  if(result['data_training'][i].detail){
                      textWithoutHtml = result['data_training'][i].detail.replace(/(<([^>]+)>)/gi, "");
                  }

                  let type_article = `` ;
                  if(type == 'all'){
                      type_article = result['data_training'][i].type_article;
                  }
                  else{
                      type_article = result['type_article'] ;
                  }

                  let html_Highlight = `<span id="span_Highlight_id_`+result['data_training'][i].id+`" class="float-end">..</span>`;
                  if(result['data_training'][i].highlight_number){
                    html_Highlight = `
                      <span id="span_Highlight_id_`+result['data_training'][i].id+`">
                        <i class="i_Highlight fa-solid fa-circle-`+result['data_training'][i].highlight_number+` font-24 float-end text-success"></i>
                      </span>
                      `;
                  }

                  let sum_datetime_start = ``;
                  if(result['data_training'][i].datetime_start){
                    let datetime_start = result['data_training'][i].datetime_start;
                    // แยกวันที่และเวลา
                    let [date_datetime_start, time_datetime_start] = datetime_start.split(' ');
                    // แยกส่วนของวันที่
                    let [year_datetime_start, month_datetime_start, day_datetime_start] = date_datetime_start.split('-');
                    // แปลงรูปแบบวันที่เป็น วัน/เดือน/ปี
                    let formatted_date_start = `${day_datetime_start}/${month_datetime_start}/${year_datetime_start}`;
                    // แยกส่วนของเวลา (เฉพาะ HH:MM:SS)
                    let [hour, minute, second] = time_datetime_start.split('.')[0].split(':');
                    let formatted_time_start = `${hour}:${minute}`;

                    sum_datetime_start = formatted_date_start+` `+formatted_time_start+` น.` ;
                  }

                  let sum_datetime_end = `-`;
                  if(result['data_training'][i].datetime_end){
                    let datetime_end = result['data_training'][i].datetime_end;
                    // แยกวันที่และเวลา
                    let [date_datetime_end, time_datetime_end] = datetime_end.split(' ');
                    // แยกส่วนของวันที่
                    let [year_datetime_end, month_datetime_end, day_datetime_end] = date_datetime_end.split('-');
                    // แปลงรูปแบบวันที่เป็น วัน/เดือน/ปี
                    let formatted_date_end = `${day_datetime_end}/${month_datetime_end}/${year_datetime_end}`;
                    // แยกส่วนของเวลา (เฉพาะ HH:MM:SS)
                    let [hour, minute, second] = time_datetime_end.split('.')[0].split(':');
                    let formatted_time_end = `${hour}:${minute}`;

                    sum_datetime_end = formatted_date_end+` `+formatted_time_end+` น.`;
                  }

                  let html = `
                      <div class="col-12 col-md-3">
                        <div class="card">
                          <img src="`+result['data_training'][i].photo+`" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">
                              `+result['data_training'][i].title+`
                            </h5>
                            <p class="card-text text-info">
                              #`+type_article+`
                            </p>
                            <p class="card-text">
                              <b>เริ่ม : </b>`+sum_datetime_start+`
                              <br>
                              <b>สิ้นสุด : </b>`+sum_datetime_end+`
                            </p>
                            <p class="detail-course">
                              `+textWithoutHtml+`
                            </p>
                            <hr>
                            <span>
                              <b>Highlight</b>
                              `+html_Highlight+`
                            </span>
                            <center class="mt-4 mb-2">
                              <a href="{{ url('/preview_training') }}/`+result['data_training'][i].id+`" class="btn btn-sm btn-info">
                                ดูข้อมูล
                              </a>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Highlight</button>
                                <ul class="dropdown-menu" style="margin: 0px;">
                                  <li>
                                    <span class="dropdown-item btn" onclick="change_Highlight('`+result['data_training'][i].id+`' , 'ว่าง')">
                                      ว่าง
                                    </span>
                                  </li>
                                  <li>
                                    <span class="dropdown-item btn" onclick="change_Highlight('`+result['data_training'][i].id+`' , '1')">
                                      ลำดับที่ 1
                                    </span>
                                  </li>
                                  <li>
                                    <span class="dropdown-item btn" onclick="change_Highlight('`+result['data_training'][i].id+`' , '2')">
                                      ลำดับที่ 2
                                    </span>
                                  </li>
                                  <li>
                                    <span class="dropdown-item btn" onclick="change_Highlight('`+result['data_training'][i].id+`' , '3')">
                                      ลำดับที่ 3
                                    </span>
                                  </li>
                                  <li>
                                    <span class="dropdown-item btn" onclick="change_Highlight('`+result['data_training'][i].id+`' , '4')">
                                      ลำดับที่ 4
                                    </span>
                                  </li>
                                  <li>
                                    <span class="dropdown-item btn" onclick="change_Highlight('`+result['data_training'][i].id+`' , '5')">
                                      ลำดับที่ 5
                                    </span>
                                  </li>
                                </ul>
                              </div>
                            </center>
                          </div>
                        </div>
                      </div>
                  `;

                  div_content.insertAdjacentHTML('beforeend', html); // แทรกล่างสุด

              }
          }

      });
  }

  function change_Highlight(training_id , number){
    // console.log(training_id);
    // console.log(number);

    fetch("{{ url('/') }}/api/change_Highlight/" + training_id  + "/" + number)
      .then(response => response.json())
      .then(result => {
          // console.log(result);

          if(result['old_id']){
            let span_Highlight_old_id = document.querySelector('#span_Highlight_id_'+result['old_id']);

            if(result['old_id_change_to']){
                span_Highlight_old_id.innerHTML = `
                  <span id="span_Highlight_id_`+result['old_id']+`">
                    <i class="i_Highlight fa-solid fa-circle-`+result['old_id_change_to']+` font-24 float-end text-success"></i>
                  </span>
                `;

                let icon_1 = document.getElementById('span_Highlight_id_'+result['old_id']);
                    icon_1.classList.remove('i_Highlight');
                    // void icon_1.offsetWidth; // Trigger reflow
                    setTimeout(() => {
                      icon_1.classList.add('i_Highlight');
                    }, 500);
                  }
            else{
              span_Highlight_old_id.innerHTML = `
                <span id="span_Highlight_id_`+result['old_id']+`" class="float-end">..</span>
              `;
            }
          }

          let select = document.querySelector('#span_Highlight_id_'+training_id);
          select.innerHTML = `
            <span id="span_Highlight_id_`+training_id+`">
              <i class="i_Highlight fa-solid fa-circle-`+number+` font-24 float-end text-success"></i>
            </span>
          `;

          let icon_2 = document.getElementById('span_Highlight_id_'+training_id);
              icon_2.classList.remove('i_Highlight');
              // void icon_2.offsetWidth; // Trigger reflow
              setTimeout(() => {
                icon_2.classList.add('i_Highlight');
              }, 500);

      });
  }


</script>


@endsection