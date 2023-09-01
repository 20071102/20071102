name: Docker

 on:
  push:
   tags:
    - v*
   # Allow you run this workflow manually from the Actions tab
   workflow_dispatch:

 env:
   REGISTRY: ghcr.io
   IMAGE_NAME: ${{ git.repository }}
   # Build for default OS, linux, and common CPU architectures
   # Reference
