<template>
  <div class="item">
  
  <my-upload field="img"
   @crop-success="cropSuccess"
   @crop-upload-success="cropUploadSuccess"
   @crop-upload-fail="cropUploadFail"
   v-model="show"
     :width="200"
       :height="200"
         url="/upload"
         lang-type="en"
           :params="params"
             :headers="headers"
               ></my-upload>
</div>
</template>

<script>
    export default {
        data(){
          return{
        		show: false,
        		imgDataUrl: null,
        		params: {
        			token: '123456798',
        			name: 'img'
        		},
        		headers: {
        			smail: '*_~',
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        		},
            army:{
              fnamekh:'',lnamekh:'',lname:'',fname:'',
              birthname:'',othername:'',dob:'',sex:'',
              bVillage:'',bCommune:'',bDistricts:'',bProvinces:'',
              cVillage:'',cCommune:'',cDistricts:'',cProvinces:'',
              grade:'',dateGrade:'',position:'',datePosition:'',
              unit:'',ethnicity:'',nationality:'',religion:'',
              education:'',foreignLang:'',skill:'',passCourse:'',
              inCountry:'',outCountry:'',passFight:'',
              health:'',healthDate:'',appreciate:'',fines:'',
              identity:'',joinDate:'',description:''
            }
          }
        },
        mounted() {
            console.log('Component mounted.')
        },
        components: {
      		'my-upload': myUpload
      	},
      	methods: {
      		toggleShow() {
      			let {show} = this;
      			this.show = !show;
      		},
      		cropSuccess(data, field, key) {

      				this.imgDataUrl = data;
      		},
      		cropUploadSuccess(data, field, key) {
      			console.log(data);
      			console.log('field: ' + field);
      			console.log('key: ' + key);
      		},
      		cropUploadFail(status, field, key) {

      			console.log(status);
      			console.log('field: ' + field);
      			console.log('key: ' + key);
      		},
          createArmy(){
            console.log(this.army.dob);
            // axios.post('/armies',{
            //   fnamekh: this.army.fnamekh,lnamekh:this.army.lnamekh,lname:this.army.lname,fname:this.army.fname,
            //   birthname:this.army.birthname,othername:this.army.othername,dob:this.army.dob,sex:this.army.sex,
            //   bVillage:this.army.bVillage,bCommune:this.army.bCommune,bDistricts:this.army.bDistricts,bProvinces:this.army.bProvinces,
            //   cVillage:this.army.cVillage,cCommune:this.army.cCommune,cDistricts:this.army.cDistricts,cProvinces:this.army.cProvinces,
            //   grade:this.army.grade,dateGrade:this.army.dateGrade,position:this.army.position,datePosition:this.army.datePosition,
            //   unit:this.army.unit,ethnicity:this.army.ethnicity,nationality:this.army.nationality,religion:this.army.religion,
            //   education:this.army.education,foreignLang:this.army.foreignLang,skill:this.army.skill,passCourse:this.army.passCourse,
            //   inCountry:this.army.inCountry,outCountry:this.army.outCountry,passFight:this.army.passFight,
            //   health:this.army.health,healthDate:this.army.healthDate,appreciate:this.army.appreciate,fines:this.army.fines,
            //   identity:this.army.identity,joinDate:this.army.joinDate,description:this.army.description
            //
            // }).then(response => {
            //   console.log(response.data.status);
            // });
          }
      	}
    }
</script>
