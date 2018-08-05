<template>
    <div>
        <div class="bg-black">
            <div class="inner">
                <form @submit.prevent="searchNow" class="form-container-inline">
                     <div class="form-title search-inline">
                        <h2>Search Best Friends:</h2>
                    </div>
                    <div class="form-group search-inline">
                        <div class="radio-group">
                            <div class="radio-inline">
                                <input name="dog-or-cat" value="dog" type="radio" checked="checked" v-model="search.species">
                                <label>Dogs</label>
                            </div>
                            <div class="radio-inline">
                                <input name="dog-or-cat" value="cat" type="radio" v-model="search.species">
                                <label>Cats</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group inline-location search-inline">
                        <input type="text" placeholder="City,State or Zip Code" class="form-field" name="city_or_zip" required="required" aria-required="true" v-model="search.city_or_zip">
                    </div>
                    <div class="submit-container search-inline">
                        <input class="submit-button" type="submit" value="Search" />
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <div class="search-results inner">
            <span v-if="search_error">Oops! There seems to be an error in your search. Please check the location and try again!</span>
            <span v-if="no_results">Sorry, we could not find any pets within 50 miles of that location!</span>
            <div v-if="results">
                <div class='results-div'>We found these pets within 50 miles of your location!</div>
                <div class="sort-div">
                    <button class="submit-button age-button" v-on:click="sortAge">Sort by age: {{age_order}}</button>
                </div>
            </div>
             <div class="pet-card unit" v-for="pet in pets">
                <img :src="pet.large_results_photo_url" :alt="pet.pet_name">
                <div class="pet-details">
                    <div class="pet-info"><b>Name:</b> {{ pet.pet_name }}</div>
                    <div class="pet-info"><b>Breed:</b> {{ pet.primary_breed }}</div>
                    <div class="pet-info"><b>Age:</b> {{ pet.age }} </div>
                </div>
             </div>
        </div>
        <div class="clearfix"></div>
        <new-pets-alert></new-pets-alert>
    </div>
</template>

<script>
    /**
     *  Vue PetSearch component
     */
    export default {
        data() {
            return {
                search: {
                    species: 'dog',
                    city_or_zip: '',
                },
                pets: [],
                no_results: false,
                search_error: false,
                results: false,
                sort_asc: true,
                age_order: 'Descending'
            }
        },
        methods: {
            searchNow: function() {
                this.no_results = false;
                this.search_error = false;
                this.results = false;
                this.pets = [];
                let params = {
                    key: "ebe25d5f3e2cba56bbca97e7e7ef1250",
                    output: "json",
                    start_number: 1,
                    end_number: 100,
                    species: this.search.species,
                    city_or_zip: this.search.city_or_zip,
                    geo_range: 50
                };

                jQuery.ajax({
                    data: params,
                    dataType: 'json',
                    url: 'http://api.adoptapet.com/search/ra1/pet_search',
                    context: this
                }).done(function(data) {
                    this.parseResults(data);
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus + ': ' + errorThrown);
                });

            },
            parseResults: function(data) {
                if (data.error && data.status === 'fail') {
                    this.search_error = true;
                    return;
                }

                if (data.returned_pets <= 0) {
                    this.no_results = true;
                    return;
                }
                this.results = true;
                this.pets = data.pets;
                this.sortAge();
            },
            sortAge: function() {
                if (this.sort_asc) {
                    this.pets.sort(function(a, b) {
                        return compareAges(a.age.toLowerCase(), b.age.toLowerCase());
                    });
                } else {
                    this.pets.sort(function(a, b) {
                        return compareAges(b.age.toLowerCase(), a.age.toLowerCase());
                    });
                }
                this.sort_asc = !this.sort_asc;
                if (this.sort_asc) {
                    this.age_order = 'Ascending';
                } else {
                    this.age_order = 'Descending';
                }
            }
        }
    }

    /**
     *  Normalize height of pet cards
     */
    function normalizeHeight() {
        let maxHeight = 0;
        $(".pet-card").height(maxHeight);
        $(".pet-card").each(function() {
            if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
        });

        $(".pet-card").height(maxHeight);
    }

    $(window).resize(function() {
        normalizeHeight();
    });


    /**
     *  Compare pet ages
     */
    function compareAges(a, b) {
        let ageMap = {
            'puppy': 0,
            'young': 1,
            'adult': 2,
            'senior': 3
        }
        return (ageMap[a] < ageMap[b]) ? -1 : (ageMap[a] > ageMap[b]) ? 1 : 0;
    }
</script>
