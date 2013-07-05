<?php

class DefaultController extends Controller {

    public function actionIndex() {

        $this->render('index');
    }

    public function actionHighEducation() {
        $model = new HighEducation();
        $model->unsetAttributes();

        if (isset($_GET['HighEducation'])) {
            $model->attributes = $_GET['HighEducation'];
        }

        $this->render('high_education', array(
            'model' => $model,
        ));
    }

    public function actionInsertHighEducation($id = '') {
        if ($id == '') {
            $model = new HighEducation();
            $alert = 'บันทึกข้อมูลเรียบร้อย';
            $link = '/dataCenter/default/insertHighEducation';
        } else {
            $model = HighEducation::model()->findByPk($id);
            $alert = 'แก้ไขข้อมูลเรียบร้อย';
            $link = '/dataCenter/default/highEducation';
        }

        if (isset($_POST['HighEducation'])) {
            $model->attributes = $_POST['HighEducation'];
            if ($model->validate()) {
                if ($model->save()) {
                    echo "
                        <script>
                        alert('$alert');
                        window.location='$link';
                        </script>
                        ";
                } else {
                    echo "<pre>";
                    print_r($model->getErrors());
                    echo "</pre>";
                }
            }
        }

        $this->render('_insert_high_education', array(
            'model' => $model,
        ));
    }

    public function actionDelHighEducation($id) {
        $con1 = MemPerson::model()->count('high_education = ' . $id);
        $con2 = MemRegistration::model()->count('high_education = ' . $id);
        if (($con1 + $con2) < 1) {
            $model = HighEducation::model()->findByPk($id);
            if ($model->delete()) {
                echo 'ลบข้อมูลเรียบร้อย';
            }
        }
    }

    public function actionCompanyTypeBusiness() {
        $model = new CompanyTypeBusiness();
        $model->unsetAttributes();

        if (isset($_GET['CompanyTypeBusiness'])) {
            $model->attributes = $_GET['CompanyTypeBusiness'];
        }

        $this->render('company_type_business', array(
            'model' => $model,
        ));
    }

    public function actionInsertCompanyTypeBusiness($id = '') {
        if ($id == '') {
            $model = new CompanyTypeBusiness();
            $alert = 'บันทึกข้อมูลเรียบร้อย';
            $link = '/dataCenter/default/insertCompanyTypeBusiness';
        } else {
            $model = CompanyTypeBusiness::model()->findByPk($id);
            $alert = 'แก้ไขข้อมูลเรียบร้อย';
            $link = '/dataCenter/default/CompanyTypeBusiness';
        }

        if (isset($_POST['CompanyTypeBusiness'])) {
            $model->attributes = $_POST['CompanyTypeBusiness'];
            if ($model->validate()) {
                if ($model->save()) {
                    echo "
                        <script>
                        alert('$alert');
                        window.location='$link';
                        </script>
                        ";
                } else {
                    echo "<pre>";
                    print_r($model->getErrors());
                    echo "</pre>";
                }
            }
        }

        $this->render('_insert_company_type_business', array(
            'model' => $model,
        ));
    }

    public function actionDelCompanyTypeBusiness($id) {
//        $con1 = MemPerson::model()->count('high_education = ' . $id);
//        $con2 = MemRegistration::model()->count('high_education = ' . $id);
//        if (($con1 + $con2) < 1) {
//            $model = HighEducation::model()->findByPk($id);
//            if ($model->delete()) {
//                echo 'ลบข้อมูลเรียบร้อย';
//            }
//        }
    }

}