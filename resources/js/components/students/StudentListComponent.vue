<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div
                v-for="student in students"
                :key="student.id"
                class="card mb-2"
            >
                <student-item-component :student="student" />
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
        this.$data.students = students.map(s => ({
            ...s,
            age: 38
        }));
    },
    data() {
        return {
            students: []
        };
    }
};
</script>
