<template>
    <section class="accordion_two_section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 accordionTwo">
                    <div class="panel-group" id="accordionTwoLeft">
                        <div v-for="task in dataTasks.data" class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordionTwoLeft" :href="'#collapseTwoLeft' + task.id" aria-expanded="false" class="collapsed">
                                    {{task.title}}</a> </h4>
                            </div>
                            <div :id="'collapseTwoLeft' + task.id"  class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                   <p>
                                       {{task.body}}
                                   </p>
                                    <hr>
                                    <div class="text-center">
                                      <span>
                                          <a :href="'/tasks/'+ task.id" class="btn"> Details </a>
                                      </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.panel-default -->
                    </div>
                    <!--end of /.panel-group-->
                </div>
                <!--end of /.col-sm-6-->
            </div>
        </div>
        <!--end of /.container-->
    </section>

</template>

<style>
.accordion_two_section {
    background: #f7f7f7
}

.ptb-100 {
    padding-top: 100px;
    padding-bottom: 100px
}

.accordionTwo .panel-group {
    margin-bottom: 0
}

.accordionTwo .panel {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 10px solid transparent;
    border-radius: 0;
    margin: 0
}

.accordionTwo .panel-default {
    border: 0
}

.accordionTwo .panel-default>.panel-heading {
    background: #4385f5;
    border-radius: 0px;
    border-color: #4385f5
}

.accordion-wrap .panel-heading {
    padding: 0px;
    border-radius: 0px
}

.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: inherit
}

.accordionTwo .panel .panel-heading a.collapsed {
    color: #999999;
    background-color: #fff;
    display: block;
    padding: 12px 20px
}

.accordionTwo .panel .panel-heading a {
    display: block;
    padding: 12px 20px;
    color: #fff
}

.accordion-wrap .panel .panel-heading a {
    font-size: 14px
}

.accordionTwo .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 0;
    padding-top: 0;
    padding: 20px 20px 20px 30px;
    background: #4385f5;
    color: #fff;
    font-size: 14px;
    line-height: 24px
}

.accordionTwo .panel .panel-heading a:after {
    content: "\2212";
    color: #4285f4;
    background: #fff
}

.accordionTwo .panel .panel-heading a:after,
.accordionTwo .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 14px;
    float: right;
    width: 21px;
    display: block;
    height: 21px;
    line-height: 21px;
    text-align: center;
    border-radius: 50%;
    color: #FFF
}

.accordionTwo .panel .panel-heading a.collapsed:after {
    content: "\2b";
    color: #fff;
    background-color: #DADADA
}

.accordionTwo .panel .panel-heading a:after {
    content: "\2212";
    color: #4285f4;
    background: #dadada
}

a:link {
    text-decoration: none
}
</style>

<script>
    export default {
        props: [
            'dataTasks'
        ],
        mounted() {
            this.update();
        },
        methods:{
            update: function () {
            }
        }
    }
</script>
