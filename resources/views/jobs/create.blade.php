<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Game Developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="50,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park , New York"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>

        <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />

        <x-forms.divider/>

        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="finance , developer , marketing"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
