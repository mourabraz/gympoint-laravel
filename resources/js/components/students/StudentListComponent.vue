<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div
                v-for="student in students"
                :key="student.id"
                class="card mb-2"
            >
                <student-item-component
                    :student="student"
                    @studentDeleted="studentDeleted"
                />
            </div>
        </div>
    </div>
</template>

<script>
import StudentItemComponent from "./StudentItemComponent";

export default {
    props: ["list"],
    components: {
        StudentItemComponent
    },
    mounted() {
        let students = JSON.parse(this.list);
        this.students = students.map(s => ({
            ...s,
            age: window.dateFns.differenceInYears(
                new Date(),
                window.dateFns.parseISO(s.birthday_at)
            )
        }));
    },
    data() {
        return {
            students: []
        };
    },
    methods: {
        studentDeleted(student) {
            this.students = this.students.filter(s => s.id !== student.id);
            Swal.fire({
                title: "Excluído",
                text: "O registro foi excluído com sucesso",
                icon: "success",
                showCancelButton: false,
                confirmButtonColor: "#38c172",
                confirmButtonText: "Ok!",
                allowOutsideClick: false
            });
        }
    }
};
</script>
