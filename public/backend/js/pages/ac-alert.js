'use strict';
$(document).ready(function() {
    // [ sweet-basic ]
    $('.sweet-basic').on('click', function() {
        swal('Hello world!');
    });
    // [ sweet-success ]
    $('.sweet-success').on('click', function() {
        swal("Good job!", "You clicked the button!", "success");
    });
    // [ sweet-warning ]
    $('.sweet-warning').on('click', function() {
        swal("Good job!", "You clicked the button!", "warning");
    });
    // [ sweet-error ]
    $('.sweet-error').on('click', function() {
        swal("Good job!", "You clicked the button!", "error");
    });
    // [ sweet-info ]
    $('.sweet-info').on('click', function() {
        swal("Good job!", "You clicked the button!", "info");
    });
    // [ sweet-multiple ]
    $('.sweet-multiple').on('click', function() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your file is safe!", {
                        icon: "error",
                    });
                }
            });
    });
    // custom delete confirm--Author:suraj
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
    });
    // [ sweet-prompt ]
    $('.sweet-prompt').on('click', function() {
        swal("Write something here:", {
                content: "input",
            })
            .then((value) => {
                swal(`You typed: ${value}`);
            });
    });
    // [ sweet-ajax ]
    $('.sweet-ajax').on('click', function() {
        swal({
                text: 'Search for a movie. e.g. "La La Land".',
                content: "input",
                button: {
                    text: "Search!",
                    closeModal: false,
                },
            })
            .then(name => {
                if (!name) throw null;
                return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
            })
            .then(results => {
                return results.json();
            })
            .then(json => {
                const movie = json.results[0];
                if (!movie) {
                    return swal("No movie was found!");
                }
                const name = movie.trackName;
                const imageURL = movie.artworkUrl100;
                swal({
                    title: "Top result:",
                    text: name,
                    icon: imageURL,
                });
            })
            .catch(err => {
                if (err) {
                    swal("Oh noes!", "The AJAX request failed!", "error");
                } else {
                    swal.stopLoading();
                    swal.close();
                }
            });
    });
});
