# sample-service

A small service used to exercise Diffport's provenance engine against real git
history. The authorship mix here is deliberate: some commits carry agent trailers,
some are authored by bot identities, and some carry no signal at all.

Those last ones are the point. Diffport reports them as **untraced** rather than
assuming a person wrote them.
